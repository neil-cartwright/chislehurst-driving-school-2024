<template>
    <article class="notification">
        <div class="is-flex is-justify-content-space-between">
            <h3 class="animated is-uppercase has-text-weight-bold">
                Customer reviews
                <span class="has-text-weight-light is-size-7"
                    >{{ counter + 1 }}/{{ recommendations.length + 1 }}</span
                >
            </h3>
            <div>
                <button
                    class="button is-small is-link"
                    @click="next"
                    title="Read some more recommendations"
                >
                    next &gt;&gt;
                </button>
            </div>
        </div>
        <br />
        <transition name="fade">
            <div v-if="contentHasChanged">
                <div class="content italic">
                    <p>&ldquo;{{ recommendations[counter].comment }}&rdquo;</p>
                    <p class="has-text-right">
                        - {{ recommendations[counter].name.match(/\S+/)[0] }},
                        {{ recommendations[counter].area }}
                    </p>
                </div>
            </div>
        </transition>
    </article>
</template>
<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
    opacity: 0.5;
}
.level.is-mobile {
    margin-bottom: 0;
}
</style>
<script setup>
import { ref } from "vue";
import recommendations from "../recommendations.js";

const contentHasChanged = ref(1);
const counter = ref(0);
const next = () => {
    counter.value++;
    if (counter.value == recommendations.length) {
        counter.value = 0;
    }
    contentHasChanged.value = 0;

    setTimeout(() => {
        contentHasChanged.value = 1;
    }, 300);
};
</script>
