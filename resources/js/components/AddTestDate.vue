<template>
    <a class="level-item button is-text" @click.prevent="openModal">
        <span v-if="customer.test_details">Edit </span>
        <span v-else>Add </span>&nbsp;test date
    </a>

    <div class="modal" :class="modalOpen && 'is-active'">
        <form @submit.prevent="handleSubmit">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Add Test Date for {{ customer.name }}
                        </p>
                    </header>
                    <section class="card-content">
                        <input
                            type="date"
                            v-model="formData.date"
                            class="input mb-2"
                            required
                        />
                        <hr />
                        <div class="is-flex is-justify-content-center">
                            <input
                                type="text"
                                v-model="formData.test_center"
                                class="input mr-2"
                                placeholder="Bromley"
                                required
                            />
                            <input
                                type="text"
                                v-model="formData.test_time"
                                class="input"
                                placeholder="11.11"
                                required
                            />
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button
                            class="button is-success"
                            @click.prevent="handleSubmit"
                            type="submit"
                        >
                            <span v-if="customer.test_details">Edit </span>
                            <span v-else>Add </span>&nbsp;test date
                        </button>
                        <button
                            class="button is-danger"
                            type="button"
                            @click="nullTest"
                        >
                            Remove Test
                        </button>
                        <button
                            class="button is-white"
                            type="button"
                            @click="closeModal"
                        >
                            Close Modal
                        </button>
                    </footer>
                </div>
            </div>
        </form>
    </div>
</template>
<script setup>
import axios from "axios";
import { ref } from "vue";
import dayjs from "dayjs";
import advancedFormat from "dayjs/plugin/advancedFormat.js";
dayjs.extend(advancedFormat);

const props = defineProps(["customer"]);

const success = ref(false);

const modalOpen = ref(false);

const date = ref(dayjs(new Date()).format("YYYY-MM-DD"));

console.log(props.customer.test_date);

const openModal = () => {
    modalOpen.value = true;
};

const closeModal = () => {
    modalOpen.value = false;
};

const formData = ref({
    date: props.customer.test_date ?? date.value,
    test_center: props.customer.test_center ?? undefined,
    test_time: props.customer.test_time ?? undefined,
    customer_id: props.customer.id,
});

const nullTest = () => {
    formData.value.test_center = null;
    formData.value.test_time = null;
    handleSubmit();
};

const handleSubmit = (e) => {
    axios
        .post("/admin/customer/test", formData.value, {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        })
        .then((response) => {
            if (response.data) {
                closeModal();
                setTimeout(() => {
                    location.reload();
                }, 2000);
            }
        })
        .catch((error) => {
            console.log(error.response.data);
        });
};
</script>
