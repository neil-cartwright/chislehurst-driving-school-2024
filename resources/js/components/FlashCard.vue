<template>
    <div>
        <div @click="showDescription">
            <slot />
        </div>
    </div>

    <div class="modal" :class="description && 'is-active'">
        <div class="modal-background" @click="hideDescription"></div>
        <div class="modal-content">
            <div class="card">
                <div class="card-content">
                    <slot />
                    <figcaption
                        class="has-text-centered has-background-warning p-2 mt-2"
                    >
                        <div class="is-italic mr-2">{{ type }}</div>
                        <div class="has-text-weight-bold">{{ alt }}</div>
                    </figcaption>
                </div>
            </div>
        </div>
        <button
            class="modal-close is-large"
            aria-label="close"
            @click="hideDescription"
        ></button>
    </div>
</template>

<script setup>
import { ref } from "vue";
const props = defineProps(["type", "alt"]);

const description = ref(false);

const showDescription = () => {
    return (description.value = true);
};
const hideDescription = () => {
    return (description.value = false);
};
</script>
