<template>
    <div class="tabs is-toggle is-fullwidth">
        <ul>
            <li
                v-for="tab in tabs"
                :key="tab"
                @click="activeItem = tab.item"
                :class="activeItem == tab.item && 'is-active'"
            >
                <a>{{ tab.item }}</a>
            </li>
        </ul>
    </div>
    <div v-for="tab in tabs">
        <component
            :is="tab.component"
            v-if="tab.item == activeItem"
        ></component>
    </div>
</template>
<script setup>
import { ref } from "vue";
import Ruxley from "./RuxleyRoundabout.vue";
import Crittals from "./CrittalsCorner.vue";
import Frognal from "./FrognalRoundabout.vue";
import Bexley from "./BexleyReverse.vue";

const activeItem = ref("Ruxley Roundabout");

const tabs = [
    {
        item: "Ruxley Roundabout",
        component: Ruxley,
    },
    {
        item: "Crittals Corner",
        component: Crittals,
    },
    {
        item: "Frognal Roundabout",
        component: Frognal,
    },
    {
        item: "Bexley reverse roundabout",
        component: Bexley,
    },
];
</script>
