<template>
    <form @submit.prevent="handleSubmit">
        <div
            v-for="(section, sectionName) in reportData"
            :key="sectionName"
            class="mb-6"
        >
            <table class="table is-bordered has-text-centered">
                <thead>
                    <tr>
                        <th>{{ sectionName }}</th>
                        <th v-for="level in visibleLevels" :key="level">
                            {{ capitalize(level) }}
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Case 1: Section has sub-items -->
                    <template v-if="isObject(section)">
                        <tr v-for="(item, itemName) in section" :key="itemName">
                            <td>{{ itemName }}</td>

                            <td v-for="level in visibleLevels" :key="level">
                                <input
                                    type="radio"
                                    :name="sectionName + '-' + itemName"
                                    :value="level"
                                    v-model="selections[sectionName][itemName]"
                                />
                            </td>
                        </tr>
                    </template>

                    <!-- Case 2: Section is a single item -->
                    <template v-else>
                        <tr>
                            <td>{{ sectionName }}</td>

                            <td v-for="level in visibleLevels" :key="level">
                                <input
                                    type="radio"
                                    :name="sectionName"
                                    :value="level"
                                    v-model="selections[sectionName]"
                                />
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
        <button type="submit" value="Submit progress" class="button">
            Submit
        </button>
    </form>
</template>

<script setup>
import reportData from "../progress-report.json";
import { reactive } from "vue";
const props = defineProps(["customer"]);

// Hide "required" from UI
const visibleLevels = ["introduced", "helped", "prompted", "independent"];

// Keep full list if needed internally
const allLevels = ["required", ...visibleLevels];

// Helper to detect sub-items
const isObject = (val) => {
    return val && typeof val === "object" && !("level" in val);
};

// Capitalize helper
const capitalize = (str) => str.charAt(0).toUpperCase() + str.slice(1);

// Store selections
const selections = reactive({});

// Initialize selections (still includes "required")
for (const [sectionName, section] of Object.entries(reportData)) {
    if (isObject(section)) {
        selections[sectionName] = {};
        for (const itemName of Object.keys(section)) {
            selections[sectionName][itemName] =
                section[itemName].level || "required";
        }
    } else {
        selections[sectionName] = section.level || "required";
    }
}

const handleSubmit = () => {
    axios
        .post("/admin/customer/" + props.customer + "/progress", {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((response) => {
            /* reset form */
            console.log(response.data);
        })
        .catch((error) => {
            console.log(error.response);
            errors.value = error.response.data.message;
        });
};
</script>
<style>
td:first-child {
    width: 250px;
}
table th:first-child {
    text-align: center !important;
}
</style>
