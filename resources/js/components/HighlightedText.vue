<template>
    <div v-html="notes"></div>
</template>
<script setup>
import { computed } from "vue";
const props = defineProps(["note", "term"]);

const notes = computed(() => {
    if (props.note) {
        return props.note.replace(
            new RegExp(`(${props.term})`, "ig"),
            `<span class="has-background-info has-text-white">${props.term}</span>`
        );
    }
});
</script>
