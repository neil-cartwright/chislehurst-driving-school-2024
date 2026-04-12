<template>
    <Carousel :autoplay="10000" :pause-autoplay-on-hover="true">
        <Slide v-for="{ subject, img, text, alt } in drivingModules" :key="alt">
            <div class="card h-full">
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
        </Slide>

        <template #addons>
            <Navigation />
            <Pagination />
        </template>
    </Carousel>
</template>
<script setup>
import drivingModules from "../driving-modules.js";
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
</script>
<style scoped>
img {
    object-fit: cover;
    object-position: center 40%;
    width: 100%;
    height: 250px;
}
.carousel {
    /* --vc-pgn-border-radius: 20px; */
    --vc-pgn-height: 4px;
    --vc-pgn-width: 4px;
}
</style>
