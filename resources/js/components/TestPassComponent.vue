<template>
    <article>
        <div class="notification">
            <h3 class="mb-4 has-text-weight-bold is-uppercase is-size-6">
                Driving Test Success
            </h3>
            <Carousel class="mb-4">
                <Slide v-for="(testPass, idx) in lastTenPasses" :key="testPass">
                    <div class="flex-container">
                        <img
                            :src="testPass.img"
                            v-bind:alt="
                                'Test pass photo for learner driver taking driving lessons in ' +
                                testPass.area
                            "
                            class="image is-inline"
                            loading="lazy"
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
                </Slide>

                <template #addons>
                    <navigation />
                </template>
            </Carousel>
        </div>
    </article>
</template>

<script setup>
import drivingTestPasses from "../test-passes.js";
import { computed } from "vue";
import "vue3-carousel/dist/carousel.css";
import { Carousel, Slide, Pagination, Navigation } from "vue3-carousel";

const lastTenPasses = computed(() => {
    return drivingTestPasses.slice(0, 10);
});
</script>

<style scoped>
:is(img) {
    height: 200px;
    width: 150px;
    user-select: none; /* Disable selection */
    -webkit-user-drag: none; /* For WebKit browsers (Chrome and Safari) */
    -webkit-user-select: none;
    -moz-user-select: none; /* For Firefox */
    -ms-user-select: none; /* For Internet Explorer */
    pointer-events: none;
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
