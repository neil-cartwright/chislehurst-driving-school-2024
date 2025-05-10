<template>
    <button
        class="button is-small transition"
        :class="[
            hasNotesAndReport
                ? 'has-background-warning has-text-white'
                : hasNotes && 'has-background-success has-text-white',
        ]"
        @click="openModal"
    >
        <span class="icon">
            <i class="fa-solid fa-check-double" v-if="hasNotesAndReport"></i>
            <i class="fas fa-check" v-else-if="hasNotes"></i>
            <i class="fas fa-plus" v-else></i>
        </span>
    </button>

    <div class="modal" :class="modalOpen && 'is-active'">
        <form @submit.prevent="handleSubmit">
            <div class="modal-background"></div>
            <div class="modal-content">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">Edit note</p>
                    </header>
                    <section class="card-content">
                        <textarea
                            class="textarea"
                            name="lesson_notes"
                            v-model="formData.lesson_notes"
                        ></textarea>
                        <br />
                    </section>
                    <footer class="modal-card-foot">
                        <button
                            class="button is-success"
                            @click.prevent="handleSubmit"
                            type="submit"
                        >
                            Submit note
                        </button>
                        <button
                            class="button is-danger"
                            type="button"
                            @click="closeModal"
                        >
                            Cancel
                        </button>
                        <button
                            class="button is-warning"
                            @click.prevent="report ? viewReport() : addReport()"
                        >
                            <span>
                                {{ report ? "View report" : "Add report" }}
                            </span>
                        </button>
                    </footer>
                </div>
            </div>
            <button
                class="modal-close is-large"
                aria-label="close"
                @click="closeModal"
            ></button>
        </form>
    </div>
</template>
<script setup>
import axios from "axios";
import { ref, computed } from "vue";

const props = defineProps(["lesson", "report"]);

const modalOpen = ref(false);

/* lesson notes are string or null */
const hasNotes = ref(props.lesson.lesson_notes);

const hasReport = computed(() => {
    if (props.report) {
        return Object.keys(props.report).length != 0;
    }
});

const hasNotesAndReport = ref(props.lesson.lesson_notes && hasReport.value);

const openModal = () => {
    modalOpen.value = true;
};

const closeModal = () => {
    modalOpen.value = false;
};

const addReport = () => {
    location.href = "/admin/report/create/" + props.lesson.id;
};

const viewReport = () => {
    location.href = "/admin/report/show/" + props.report.id;
};

const formData = ref({
    lesson_id: props.lesson.id,
    lesson_notes: props.lesson.lesson_notes,
});

const handleSubmit = (e) => {
    axios
        .post(
            "/admin/lesson/notes/" + formData.value.lesson_id,
            formData.value,
            {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }
        )
        .then((response) => {
            hasNotes.value = response.data;
            closeModal();
        })
        .catch((error) => {
            console.log(error.response.data);
        });
};
</script>
