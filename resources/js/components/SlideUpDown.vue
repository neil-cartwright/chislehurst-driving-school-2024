<script setup>
import { ref } from "vue";
import SlideUpDown from "vue-slide-up-down";

const active = ref(false);
const toggleSlide = () => {
    return (active = !active);
};
</script>

<template>
    <div @click="toggleSlide">
        <h1>Always show this</h1>

        <slide-up-down :active="active" :duration="1000">
            Only show this if "active” is true
        </slide-up-down>
    </div>
</template>
