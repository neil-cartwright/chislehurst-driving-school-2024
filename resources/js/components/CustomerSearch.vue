<script setup>
import { ref, watch } from "vue";

const customer = ref(null);
const results = ref(null);
const errors = ref(null);
const all_customers = ref(false);

watch(all_customers, () => {
    search(all_customers.value);
});

const keyup_search = () => {
    return search(customer.value);
};

const search = (term) => {
    if (term != "") {
        axios
            .post("/admin/find", { name: term })
            .then((response) => {
                results.value = response.data;
            })
            .catch((error) => {
                errors.value = error.data;
            });
    } else {
        results.value = "";
    }
};
</script>
<template>
    <form class="form">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-header-title">Search for a customer</div>
                <div class="card-header-icon">
                    <div class="control">
                        <input type="checkbox" v-model="all_customers" />
                        All
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="field">
                    <div class="control">
                        <input
                            class="input"
                            name="name"
                            type="text"
                            placeholder="Dave Fisher"
                            v-model="customer"
                            autofocus
                            @keyup="keyup_search"
                        />
                    </div>
                </div>
            </div>
        </div>
    </form>

    <table class="is-fullwidth is-hoverable is-striped table" v-if="results">
        <tr v-for="result in results" :key="result.id">
            <td>
                <a :href="'/admin/customer/' + result.id">{{ result.name }}</a>
            </td>
        </tr>
    </table>
    <div v-if="errors">
        <div class="notification is-warning">
            There was an error: {{ errors.value }}
        </div>
    </div>
</template>
