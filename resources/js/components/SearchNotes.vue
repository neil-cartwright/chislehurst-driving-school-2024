<template>
    <form class="mb-4">
        <div class="field is-grouped">
            <div class="control">
                <label class="label">
                    <input
                        type="text"
                        class="input"
                        v-model="term"
                        placeholder="search notes"
                        autofocus
                        @keyup="searchNotes"
                        ref="input"
                    />
                </label>
            </div>
            <button class="button has-text-danger" @click.prevent="clearTerm">
                Clear
            </button>
        </div>
    </form>
    <div v-if="results">{{ results.length }} notes</div>
    <div class="notification mb-4" v-for="lesson in results">
        <p class="has-text-weight-bold">
            <span class="has-text-weight-bold">{{
                dayjs(lesson.lesson_date).format("dddd, MMMM Do YYYY")
            }}</span>
        </p>

        <highlighted-text
            v-if="lesson.lesson_notes"
            :note="lesson.lesson_notes"
            :term="term"
        ></highlighted-text>
        <div v-else>no notes</div>
    </div>
</template>

<script setup>
import { ref } from "vue";

import dayjs from "dayjs";
import advancedFormat from "dayjs/plugin/advancedFormat.js";
dayjs.extend(advancedFormat);

const props = defineProps(["lessons"]);

const term = ref("");

const input = ref();

const results = ref(props.lessons);

const clearTerm = () => {
    term.value = "";
    results.value = props.lessons;
    input.value.focus();
};

const searchNotes = () => {
    results.value = props.lessons.filter((lesson) => {
        if (lesson.lesson_notes) {
            return lesson.lesson_notes
                .toLowerCase()
                .includes(term.value.toLowerCase());
        } else {
            return (lesson.lesson_notes = "no notes");
        }
    });
};
</script>
