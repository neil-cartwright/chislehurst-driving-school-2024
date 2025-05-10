<template>
    <form
        @change.prevent="handleSubmit"
        class="is-flex is-align-items-center mb-4"
    >
        <div class="select mr-2">
            <select name="month" v-model="monthNum">
                <option
                    v-for="(n, month) in months"
                    :value="n"
                    :selected="month == month"
                >
                    {{ month }}
                </option>
            </select>
        </div>

        <div class="select mr-4">
            <select name="year" v-model="year">
                <option v-for="year in years">{{ year }}</option>
            </select>
        </div>
    </form>
</template>

<script setup>
import { ref, computed } from "vue";
import _ from "lodash";
import generateYearsBetween from "../helpers.js";

const props = defineProps(["month", "months", "year"]);

const years = generateYearsBetween(2018);

const year = ref(props.year);

const monthNum = ref(props.months[props.month]);

/* add leading zero to month number < 10 */
const paddedNum = computed(() => {
    return _.padStart(monthNum.value.toString(), 2, "0");
});

const handleSubmit = () => {
    location.href = "/admin/costs/show/" + paddedNum.value + "/" + year.value;
};
</script>
