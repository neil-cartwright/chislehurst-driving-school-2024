<template>
    <div class="card">
        <div class="card-header">
            <div class="card-header-title">
                Find Lessons
                <span class="is-capitalized has-text-weight-normal ml-2">{{
                    timeFrame
                }}</span>
            </div>
            <div class="card-header-icon">
                <button @click="printDiv('print-area')" class="button is-light">
                    Print
                </button>
            </div>
        </div>
        <div class="card-content overflow-x-scroll">
            <form
                class="form find-lesson-form mb-4"
                @change.prevent="handleForm"
            >
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="field radio-field mr-4">
                    <!-- radios -->
                    <div class="control">
                        <label class="radio mr-4">
                            <input
                                type="radio"
                                v-model="timeFrame"
                                name="timeFrame"
                                value="custom"
                            />
                            Custom
                        </label>
                        <label class="radio mr-2">
                            <input
                                type="radio"
                                v-model="timeFrame"
                                name="timeFrame"
                                value="today"
                            />
                            Today
                        </label>
                        <label class="radio mr-2">
                            <input
                                type="radio"
                                v-model="timeFrame"
                                name="timeFrame"
                                value="yesterday"
                            />
                            Yesterday
                        </label>
                        <label class="radio mr-2">
                            <input
                                type="radio"
                                v-model="timeFrame"
                                name="timeFrame"
                                value="week"
                            />
                            Week
                        </label>
                        <label class="radio mr-2">
                            <input
                                type="radio"
                                v-model="timeFrame"
                                name="timeFrame"
                                value="month"
                            />
                            Month
                        </label>
                        <label class="radio mr-2">
                            <input
                                type="radio"
                                v-model="timeFrame"
                                name="timeFrame"
                                value="year"
                            />
                            Year
                        </label>
                        <label class="radio mr-2">
                            <input
                                type="radio"
                                v-model="timeFrame"
                                name="timeFrame"
                                value="taxYear"
                            />
                            Tax Year
                        </label>
                    </div>
                </div>

                <hr />

                <div
                    class="field is-grouped timeframe-field has-background-light p-4"
                >
                    <div class="control">
                        <!-- from date -->
                        <label class="is-flex is-align-items-center mr-2"
                            ><span class="mr-2">From:</span>
                            <input
                                class="input"
                                name="date-from"
                                type="date"
                                v-model="dateFrom"
                                @click="updateTimeFrame"
                            />
                        </label>
                    </div>
                    <!-- to date -->
                    <div class="control">
                        <label class="is-flex is-align-items-center mr-4">
                            <span class="mr-2">To:</span>
                            <input
                                class="input"
                                name="date-to"
                                type="date"
                                v-model="dateTo"
                                @click="updateTimeFrame"
                        /></label>
                    </div>
                </div>
                <hr />
            </form>
        </div>
    </div>

    <hr />
    <Transition>
        <div class="card" v-if="results" id="print-area">
            <div class="card-content overflow-x-scroll">
                <div class="notification">
                    <div class="has-text-weight-light">
                        <p class="is-inline-block mr-2">
                            <span class="has-text-weight-bold">From:</span>
                            {{ dayjs(params.dateFrom).format(formatReadable) }}
                        </p>
                        <p class="is-inline-block">
                            <span class="has-text-weight-bold">To:</span>
                            {{ dayjs(params.dateTo).format(formatReadable) }}
                        </p>
                    </div>
                </div>
                <table class="is-fullwidth is-striped table">
                    <thead>
                        <tr>
                            <td>Date</td>
                            <td>Name</td>
                            <td>Duration</td>
                            <td>Charge</td>
                            <td>Payments</td>
                            <td>Discounts</td>
                            <td>Cancelled</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- totals -->
                        <tr class="has-background-warning has-text-weight-bold">
                            <td>{{ results.count }} appointments</td>
                            <td>Distinct: {{ results.distinct_customers }}</td>
                            <td>{{ results.total_duration }}</td>
                            <td>£{{ results.total_charges }}</td>
                            <td>£{{ results.total_payments }}</td>
                            <td>£{{ results.total_discounts }}</td>
                            <td>{{ results.total_cancelled }}</td>
                        </tr>
                        <!-- results -->
                        <tr v-for="result in results.lessons" :key="result.id">
                            <td>
                                {{
                                    dayjs(result.formatted_date).format(
                                        formatReadable
                                    )
                                }}
                            </td>
                            <td>
                                <a
                                    :href="
                                        '/admin/customer/' + result.customer_id
                                    "
                                    >{{ result.cust_name }}</a
                                >
                            </td>
                            <td>{{ result.lesson_duration }}</td>
                            <td>£{{ result.lesson_charge }}</td>
                            <td>
                                <span v-if="result.amountPaymentTaken">£</span
                                >{{ result.amountPaymentTaken }}
                            </td>
                            <td>
                                <span v-if="result.discountGiven">£</span
                                >{{ result.discountGiven }}
                            </td>
                            <td>{{ result.lesson_cancelled ? "yes" : "" }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </Transition>
</template>
<script setup>
import axios from "axios";
import { ref, computed, onMounted } from "vue";
import dayjs from "dayjs";
import advancedFormat from "dayjs/plugin/advancedFormat.js";
import duration from "dayjs/plugin/duration.js";
dayjs.extend(advancedFormat);

const emit = defineEmits(["search"]);

const today = dayjs();
const format = "YYYY-MM-DD";
const formatReadable = "ddd, MMM Do, YYYY";
const taxYearStart = "April 1, 2024";

const results = ref(null);

const computedDateFrom = computed(() => {
    switch (timeFrame.value) {
        case "custom":
            return dateFrom.value;
        case "today":
            return (dateFrom.value = today.format(format));
            break;
        case "yesterday":
            return (dateFrom.value = today.subtract(1, "day").format(format));
            break;
        case "week":
            return (dateFrom.value = today.startOf("week").format(format));
            break;
        case "month":
            return (dateFrom.value = today.startOf("month").format(format));
            break;
        case "year":
            return (dateFrom.value = today.startOf("year").format(format));
            break;
        case "taxYear":
            return (dateFrom.value = dayjs(taxYearStart).format(format));
            break;
        default:
            return (dateFrom.value = dayjs().startOf("month").format(format));
    }
});

const computedDateTo = computed(() => {
    if (timeFrame.value == "custom") {
        return dateTo.value;
    } else if (timeFrame.value == "yesterday") {
        dateTo.value = today.subtract(1, "day").format(format);
        return dateTo.value;
    } else {
        dateTo.value = today.format(format);
        return dateTo.value;
    }
});

const params = ref({
    dateFrom: computedDateFrom,
    dateTo: computedDateTo,
});

/* bound to datepickers */
const dateFrom = ref(dayjs().startOf("year").format(format));
const dateTo = ref(dayjs().format(format));

const timeFrame = ref("week");

const updateTimeFrame = () => {
    return (timeFrame.value = "custom");
};

const handleForm = (e) => {
    axios
        .post("/admin/lessons/find", params.value)
        .then((response) => {
            emit("search", timeFrame.value);
            results.value = response.data;
        })
        .catch((error) => {
            console.log(error);
        });
};

/* print the div */
const printDiv = (divId) => {
    var printContents = document.getElementById(divId).innerHTML;
    var originalContents = document.body.innerHTML;

    document.body.innerHTML = printContents;

    window.print();

    document.body.innerHTML = originalContents;
};

onMounted(() => {
    handleForm();
});
</script>
