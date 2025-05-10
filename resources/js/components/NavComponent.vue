<template>
    <nav
        class="sm:flex-nowrap flex flex-wrap items-center justify-between p-6"
        ref="el"
    >
        <a href="/" class="shrink-0">
            <i class="fa-solid fa-road text-green-600"></i
            ><span class="sm:text-xl ml-3 text-base">
                Chislehurst Driving School
            </span></a
        >

        <button class="sm:hidden block" @click="open = !open">
            <i
                class="fa-solid inline-block"
                :class="open ? 'fa-times' : 'fa-bars'"
            ></i>
        </button>

        <ul
            class="border-y flex flex-col gap-3 py-6 border-white"
            :class="
                open
                    ? 'w-full mt-6'
                    : 'sm:flex sm:flex-row sm:gap-3 sm:py-0 sm:justify-end sm:w-full  sm:ml-6 border-none hidden'
            "
        >
            <li v-if="admin" class="mr-auto">
                <a href="/admin">
                    <i class="fa-solid fa-lock mr-1"></i>

                    admin</a
                >
            </li>

            <li v-for="link in links">
                <a :href="'/' + link" class="hover:underline">{{ link }}</a>
            </li>
            <li class="ml-3">
                <a href="/logout" v-if="user" class="">logout</a>
                <a href="/login" class="" v-else>login</a>
            </li>
        </ul>
    </nav>
</template>

<script setup>
import { ref, computed } from "vue";
import _ from "lodash";

const props = defineProps({
    user: {
        type: Object,
    },
    admin: {
        type: Boolean,
    },
});
const open = ref(false);

const links = computed(() => {
    return props.user ? ["dashboard"] : ["prices", "recommendations"];
});

window.addEventListener(
    "resize",
    _.throttle(() => {
        if (open.value) {
            return (open.value = false);
        }
    })
);
</script>
