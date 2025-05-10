<template>
    <section>
        <Carousel>
            <Slide v-for="(testPass, idx) in drivingTestPasses" :key="testPass">
                <div class="notification">
                    <div class="flex-container">
                        <img
                            :src="testPass.img"
                            v-bind:alt="'Driving lessons in ' + testPass.area"
                            class="image test-pass-carousel-image is-inline"
                        />
                        <p>
                            Well done to {{ testPass.name }} from
                            {{ testPass.area }} for passing
                            <span v-if="testPass.firstTime">first time</span>
                            <span v-if="testPass.altText != ''">{{
                                testPass.altText
                            }}</span>
                            at {{ testPass.testCentre }}
                            <abbr title="Driving Test Centre">DTC</abbr> in
                            {{ testPass.datePassed }}.
                        </p>
                    </div>
                </div>
            </Slide>

            <template #addons>
                <navigation />
            </template>
        </Carousel>
    </section>
</template>

<script setup>
import drivingTestPasses from "../test-passes.js";
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";
</script>

<style scoped>
:is(img) {
    height: 200px;
    width: 150px;
}
.flex-container {
    display: flex;
    align-items: center;
    column-gap: 1rem;
}

@media (max-width: 500px) {
    .flex-container {
        flex-direction: column;
    }
    :is(img) {
        margin-bottom: 1rem;
        height: 180px;
        width: 135px;
    }
}

@media (min-width: 767px) and (max-width: 1250px) {
    .flex-container {
        flex-direction: column;
    }
    :is(img) {
        margin-bottom: 1rem;
    }
}
</style>

<style lang="scss">
/** not scoped */
.carousel__icon {
    fill: silver;
    &:hover {
        fill: #edd;
    }
}
</style>
