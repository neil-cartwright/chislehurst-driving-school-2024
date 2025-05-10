<template>
    <div class="notification is-light">
        <div class="is-flex is-justify-content-space-between">
            <h6 class="animated is-uppercase">Recommended</h6>
            <a
                class="button is-small is-info"
                @click="next"
                title="Read some more recommendations"
                >Read more >></a
            >
        </div>
        <br />
        <transition name="fade">
            <div v-if="contentHasChanged">
                <div class="content italic">
                    <p>&ldquo;{{ recommendations[counter].comment }}&rdquo;</p>
                    <p class="has-text-right">
                        - {{ recommendations[counter].name }},
                        {{ recommendations[counter].area }}
                    </p>
                </div>
            </div>
        </transition>
        <span class="has-text-weight-light is-size-7"
            >{{ counter + 1 }}/{{ recommendations.length + 1 }}</span
        >
    </div>
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
