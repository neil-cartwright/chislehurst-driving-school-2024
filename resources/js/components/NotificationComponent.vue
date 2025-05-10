<template>
    <!-- availability notification -->
    <aside class="notification" v-if="!hidden">
        <button class="delete" @click="hideNotification" title="close"></button>
        <slot />
    </aside>
</template>

<script setup>
import { ref } from "vue";

const hidden = ref(false);

const hideNotification = () => {
    return (hidden.value = true);
};
</script>
