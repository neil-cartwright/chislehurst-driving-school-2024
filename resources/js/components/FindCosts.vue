<template>
    <form @change.prevent="handleForm" class="find-costs-form mb-4">
        <div class="form-elements">
            <!-- select category -->
            <div class="select mr-2" v-if="formData.allFrom !== 'month'">
                <select name="category" v-model="formData.category">
                    <option v-for="c in categories">
                        <span class="is-capitalized">{{ c }}</span>
                    </option>
                </select>
            </div>
            <div>
                <!-- select month -->
                <div class="select mr-2" v-if="formData.allFrom != 'taxYear'">
                    <select name="month" v-model="formData.month">
                        <option
                            v-for="(n, month) in months"
                            :value="n"
                            :selected="month == month"
                        >
                            {{ month }}
                        </option>
                    </select>
                </div>
                <!-- select year -->
                <div class="select mr-4">
                    <select name="year" v-model="formData.year">
                        <option v-for="year in years">{{ year }}</option>
                    </select>
                </div>
            </div>
            <div class="radio-elements">
                <!-- category -->
                <label class="radio">
                    <input
                        type="radio"
                        name="all"
                        value="category"
                        v-model="formData.allFrom"
                    />
                    By category in month/year
                </label>
                <!-- allFrom -->
                <label class="radio">
                    <input
                        type="radio"
                        name="all"
                        value="month"
                        v-model="formData.allFrom"
                    />
                    Everything from month/year
                </label>
                <!-- tax year -->
                <label class="radio">
                    <input
                        type="radio"
                        name="all"
                        value="taxYear"
                        v-model="formData.allFrom"
                    />
                    By category in tax year {{ formData.year }}
                </label>
                <!-- description -->
                <label class="radio">
                    <input
                        type="radio"
                        name="all"
                        value="description"
                        @focus="focusInput"
                        v-model="formData.allFrom"
                    />
                    Description
                </label>
            </div>
        </div>
        <hr />

        <!-- description input -->
        <div class="control description-control">
            <label class="label">
                <input
                    class="input"
                    placeholder="By description"
                    type="text"
                    @keyup="handleSubmit"
                    @focus="formData.allFrom = 'description'"
                    ref="descriptionInput"
                    v-model="formData.description"
                />
            </label>
        </div>

        <hr />
        <div v-if="message">
            <div class="notification">{{ message }}</div>
            <hr />
        </div>
    </form>
    <!-- results -->
    <div class="card">
        <div class="card-content p-0 overflow-x-scroll">
            <table
                v-if="results.costs && results.costs.length"
                class="is-striped is-fullwidth table"
            >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="has-background-warning has-text-weight-bold">
                        <td>
                            [<span class="has-text-danger">{{
                                results.costs.length
                            }}</span
                            >]
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span v-if="results.total_costs"
                                >£{{ results.total_costs.toFixed(2) }}</span
                            >
                        </td>
                    </tr>
                    <tr v-for="result in results.costs" :key="results.costs.id">
                        <td>
                            <a :href="'/admin/cost/edit/' + result.id">{{
                                result.id
                            }}</a>
                        </td>
                        <td>{{ result.category }}</td>
                        <td class="whitespace-nowrap">
                            {{
                                dayjs(result.date_of_purchase).format(
                                    formatReadable
                                )
                            }}
                        </td>
                        <td>
                            <button
                                class="button is-text"
                                @click="handleDescription(result.description)"
                            >
                                {{ result.description }}
                            </button>
                        </td>
                        <td>£{{ result.amount }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="notification" v-else>No results</div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import _ from "lodash";
import dayjs from "dayjs";
import generateYearsBetween from "../helpers.js";
import advancedFormat from "dayjs/plugin/advancedFormat.js";
dayjs.extend(advancedFormat);

const formatReadable = "ddd, MMM Do, YYYY";

const props = defineProps(["months", "categories"]);

const years = generateYearsBetween(2018);

const year = ref(dayjs().year());

const monthNum = ref(dayjs().month() + 1);

const cat = ref(props.categories[0]);

const descriptionInput = ref(null);

const message = ref("");

const results = ref({
    costs: null,
    total_costs: null,
});

const formData = ref({
    month: monthNum.value,
    category: cat.value,
    year: year.value,
    allFrom: "month",
    description: null,
});

const focusInput = () => {
    return descriptionInput.value.focus();
};

const handleDescription = (description) => {
    formData.value.description = description;
    formData.value.allFrom = "description";
    if (descriptionInput.value) {
        focusInput();
    }
    handleSubmit();
};

const handleForm = () => {
    formData.value.description = null;
    handleSubmit();
};

const handleSubmit = () => {
    axios
        .post("/admin/costs", formData.value, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((res) => {
            results.value.costs = res.data.costs;
            results.value.total_costs = res.data.total_costs;
            message.value = res.data.message;
        })
        .catch((err) => {
            console.log(err);
        });
};

onMounted(() => {
    handleSubmit();
});
</script>
