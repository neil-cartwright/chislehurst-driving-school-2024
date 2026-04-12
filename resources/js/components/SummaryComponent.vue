<script setup>
import { ref, onMounted } from "vue";
import dayjs from "dayjs";
import advancedFormat from "dayjs/plugin/advancedFormat.js";
dayjs.extend(advancedFormat);

const props = defineProps(["year"]);

const summary = ref([]);

const getSummary = () => {
    axios
        .post("/admin/lessons/summary/" + props.year)
        .then((response) => {
            if (response) {
                summary.value = response.data;
            }
        })
        .catch((error) => {
            error.value = error;
            console.log(error);
        });
};

onMounted(() => {
    getSummary();
});
</script>

<template>
    <div class="overflow-x-scroll mb-6">
        <table class="table is-striped has-text-centered mx-auto">
            <thead>
                <tr class="text-centered">
                    <th>Year</th>
                    <td>Days worked</td>
                    <td>Days off</td>
                    <td>Weeks off</td>
                    <td>Short weeks</td>
                    <td>Normal weeks</td>
                    <td>Overtime weeks</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        {{ summary["year"] }}
                    </th>
                    <td>{{ summary["total_days_worked"] }} / 231</td>
                    <td>{{ summary["total_short_days"] }}</td>
                    <td>{{ summary["total_weeks_off"] }}</td>
                    <td>{{ summary["total_short_weeks"] }}</td>
                    <td>{{ summary["total_normal_weeks"] }}</td>
                    <td>{{ summary["total_overtime_weeks"] }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="columns is-multiline">
        <div class="column is-half" v-for="week in summary.weeks">
            <div class="card mb-2">
                <header class="card-header">
                    <div class="card-header-title">
                        <span class="tag mr-1 has-text-weight-semibold">
                            Week
                            {{ week.week_number }} </span
                        ><span
                            class="tag mr-1 has-text-weight-bold is-hidden-mobile"
                        >
                            {{ dayjs(week.start_date).format("DD/MM/YYYY") }}
                        </span>

                        <span v-if="week.week_off" class="mr-1 tag is-info"
                            ><i class="fa-solid fa-umbrella-beach"></i
                        ></span>
                        <span
                            class="tag mr-1 is-info"
                            v-if="week.days_off['days_short'] > 0"
                        >
                            Days off:&nbsp;{{
                                week.days_off["days_short"]
                            }}</span
                        >
                        <span
                            class="tag"
                            :class="
                                week.total_lessons < 15
                                    ? 'is-warning'
                                    : 'is-success'
                            "
                            >{{ week.total_lessons }} lessons</span
                        >
                    </div>
                    <div class="card-header-icon">
                        <span class="tag is-warning has-text-weight-bold"
                            >&pound;{{ week.total_lesson_charge }}</span
                        >
                    </div>
                </header>
                <div class="card-content overflow-x-scroll">
                    <table class="table is-fullwidth is-striped">
                        <tbody>
                            <tr v-for="day in week.days" class="is-flex">
                                <td style="width: 125px" class="has-text-right">
                                    <span
                                        class="has-text-weight-bold is-size-6 is-size-7-mobile"
                                        >{{ day.day_name.slice(0, 3) }}</span
                                    >&nbsp;
                                    <span
                                        class="has-text-weight-light is-size-7"
                                        >{{
                                            dayjs(day.date).format("DD/MM/YY")
                                        }}</span
                                    >
                                </td>

                                <td v-for="record in day.records">
                                    <a
                                        :href="
                                            '/admin/customer/' +
                                            record.customer_id
                                        "
                                        ><span
                                            class="tag"
                                            :class="
                                                record.lesson_rate == 'test'
                                                    ? 'is-warning'
                                                    : record.lesson_cancelled &&
                                                      'is-danger'
                                            "
                                            >&pound;{{
                                                record.lesson_charge -
                                                record.discountGiven
                                            }}</span
                                        ></a
                                    >
                                </td>
                                <td v-if="day.daily_total" class="ml-auto">
                                    <span
                                        class="tag is-light has-text-weight-light"
                                        >&pound;{{ day.daily_total }}</span
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
tr.text-centered th {
    text-align: center;
    white-space: nowrap;
}
tr {
    border-bottom: 1px solid hsl(0, 0%, 86%);
}
.table th,
.table td {
    border-bottom: none;
}
</style>
