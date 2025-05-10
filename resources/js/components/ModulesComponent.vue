<template>
    <div class="columns is-multiline mb-4">
        <div
            class="column is-6 is-4-desktop is-flex"
            v-for="{ subject, img, text, alt } in drivingModules"
            :key="alt"
        >
            <div class="card">
                <div class="card-header">
                    <div class="card-header-title">{{ subject }}</div>
                </div>
                <div class="card-image">
                    <img :src="img" :alt="alt" />
                </div>
                <div class="card-content">
                    <p>{{ text }}</p>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import drivingModules from "../driving-modules.js";
</script>
<style scoped>
img {
    object-fit: cover;
    object-position: center 40%;
    width: 100%;
    height: 250px;
}
</style>
