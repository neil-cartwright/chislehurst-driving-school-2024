<script setup>
import { ref } from "vue";
const props = defineProps(["message"]);
const modalOpen = ref(false);
const toggleModal = () => {
    return (modalOpen.value = !modalOpen.value);
};
</script>

<template>
    <button class="button is-light is-small" @click="toggleModal()">
        View
    </button>

    <div class="modal" :class="modalOpen && 'is-active'">
        <div class="modal-background" @click="toggleModal()"></div>
        <div class="modal-content">
            <div class="card">
                <div class="card-content" style="text-wrap: wrap">
                    {{ message }}
                </div>
            </div>
        </div>
        <button
            class="modal-close is-large"
            aria-label="close"
            @click="toggleModal()"
        ></button>
    </div>
</template>
