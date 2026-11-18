<template>
    <div class="card match-height">
        <div class="card-header">
            <h3 class="card-header-title">
                Road signs you might see in
                <span class="is-capitalized"
                    >&nbsp;{{ area.replace("-", " ") }}</span
                >
            </h3>
        </div>

        <div class="card-content is-clearfix">
            <transition name="fade">
                <div class="p-4">
                    <div class="level is-flex is-justify-content-center">
                        <div class="level-item">
                            <figure class="image" v-if="signs">
                                <img
                                    v-bind:src="signs[counter].src"
                                    v-bind:alt="`UK road sign: ${signs[counter].meaning}`"
                                    style="max-width: 150px"
                                />
                            </figure>
                        </div>
                    </div>

                    <div class="level">
                        <div class="level-item">
                            <span
                                class="learn-some-road-signs-answer"
                                v-if="signs"
                            >
                                <span v-if="signs">{{
                                    signs[counter].meaning
                                }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </transition>
        </div>

        <div class="card-footer">
            <div class="card-footer-item">
                <span class="next">
                    <button class="button" @click="previousSign">
                        <span class="icon is-large">
                            <i class="fas fa-angle-double-left"></i>
                        </span>
                        &nbsp;&nbsp;Previous
                    </button>
                </span>
            </div>

            <div class="card-footer-item">
                <span class="next">
                    <button class="button" @click="nextSign">
                        Next&nbsp;&nbsp;
                        <span class="icon is-large">
                            <i class="fas fa-angle-double-right"></i>
                        </span>
                    </button>
                </span>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import {
    bickley,
    bromley,
    charlton,
    chislehurst,
    downham,
    eltham,
    grove_park,
    hayes,
    kidbrooke,
    lee,
    lewisham,
    mottingham,
    new_eltham,
    orpington,
    petts_wood,
    sidcup,
    woolwich,
} from "../area-signs.js";

const props = defineProps({
    area: {
        type: String,
        required: true,
    },
});

const counter = ref(0);

const nextSign = () => {
    counter.value++;
    if (counter.value >= signs.value.length) {
        return (counter.value = 0);
    }
};

const previousSign = () => {
    counter.value--;
    if (counter.value < 0) {
        return (counter.value = signs.value.length - 1);
    }
};

const areas = ref({
    bickley,
    bromley,
    charlton,
    chislehurst,
    downham,
    eltham,
    "grove-park": grove_park,
    hayes,
    kidbrooke,
    lee,
    lewisham,
    mottingham,
    "new-eltham": new_eltham,
    orpington,
    "petts-wood": petts_wood,
    sidcup,
    woolwich,
});

const signs = ref(areas.value[props.area]);
</script>

<style scoped>
.card {
    border-radius: 5px;
}
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
</style>
