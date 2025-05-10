<template>
    <p class="has-text-centered">
        <a @click="openModal">
            <i class="fa-solid fa-video mr-2"></i>
            Watch dashcam footage of this route
        </a>
    </p>
    <div class="modal" :class="modalOpen && 'is-active'">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="notification p-4">
                <video controls="true" :name="video">
                    <source :src="`/video/${video}.MOV`" />
                </video>
            </div>
        </div>
        <button
            class="modal-close is-large"
            aria-label="close"
            @click="modalOpen = false"
        ></button>
    </div>
</template>
<script setup>
import { ref } from "vue";
const props = defineProps(["video", "iframe"]);

const modalOpen = ref(false);

const openModal = () => {
    return (modalOpen.value = true);
};
</script>
