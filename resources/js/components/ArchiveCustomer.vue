<template>
    <form
        class="is-flex is-align-items-center has-background-light p-2 overflow-x-scroll"
        @submit.prevent="handleSubmit"
    >
        <span class="has-text-weight-bold is-hidden-mobile mr-2">Status:</span>
        <label class="checkbox whitespace-nowrap">
            <input
                type="checkbox"
                v-model="formData.archived"
                :false-value="0"
                :true-value="1"
            />
            <span class="mx-2">Archive</span>
        </label>
        <label class="checkbox whitespace-nowrap mr-4">
            <input
                type="checkbox"
                v-model="formData.has_passed_test"
                :false-value="0"
                :true-value="1"
            />
            <span class="mx-2">Has passed test</span>
        </label>
        <span class="tag is-warning" v-if="statusUpdated">Status Updated</span>
        <div class="control" v-else>
            <button class="button is-small" type="submit">Submit</button>
        </div>
    </form>
</template>
<script setup>
import axios from "axios";
import { ref } from "vue";

const props = defineProps(["customer"]);
const emit = defineEmits("statusUpdated");

const formData = ref({
    customer_id: props.customer.id,
    archived: props.customer.archived,
    has_passed_test: props.customer.has_passed_test,
});

const statusUpdated = ref(false);

const handleSubmit = () => {
    axios
        .post(
            "/admin/customer/archive/" + formData.value.customer_id,
            formData.value,
            {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }
        )
        .then((res) => {
            statusUpdated.value = true;
            setTimeout(() => {
                statusUpdated.value = false;
            }, 3000);
        })
        .catch((err) => {
            console.log(err.response);
        });
};
</script>
