<template>
    <button class="button is-small" @click="openModal">View</button>
    <Teleport to="body">
        <div class="modal" :class="state && 'is-active'">
            <div class="modal-background" @click="closeModal"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <p class="modal-card-title">Lesson notes: {{ date }}</p>
                    <button
                        class="delete"
                        aria-label="close"
                        @click="closeModal"
                    ></button>
                </header>
                <section class="modal-card-body">
                    {{ note }}
                </section>
                <footer class="modal-card-foot">
                    <button class="button" @click="closeModal">Cancel</button>
                </footer>
            </div>
        </div>
    </Teleport>
</template>
<script setup>
import { ref } from "vue";

defineProps(["note", "date"]);

const state = ref(false);

const openModal = () => {
    return (state.value = true);
};

const closeModal = () => {
    return (state.value = false);
};
</script>
