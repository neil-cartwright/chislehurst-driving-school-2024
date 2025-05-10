<template>
    <!-- update or create -->
    <update-lesson-form
        v-if="update"
        :customers="customers"
        :updates="updates"
        @submit="formSubmitted"
    />
    <create-lesson-form
        v-else
        :customers="customers"
        @submit="formSubmitted"
        :key="componentKey"
    />

    <Transition>
        <div class="notification is-warning" v-if="notified">
            <p>Lesson for {{ customer.name }} has been {{ message }}</p>
        </div>
    </Transition>
</template>

<script setup>
import { ref, computed } from "vue";
const props = defineProps(["customers", "lesson", "update"]);

const updates = ref({
    lesson: props.lesson,
    update: props.update,
});

const message = computed(() => {
    return props.update ? "updated" : "saved";
});

const componentKey = ref(0);
const notified = ref(false);
const customer = ref(null);

const formSubmitted = (data) => {
    customer.value = data.value;
    notified.value = true;
    componentKey.value += 1;
    setTimeout(() => {
        notified.value = false;
        window.location.href = "/admin/lessons";
    }, 2000);
};
</script>

<style>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
</style>
