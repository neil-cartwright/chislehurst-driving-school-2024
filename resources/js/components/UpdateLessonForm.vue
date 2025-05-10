<template>
    <form
        class="form mb-4"
        autocomplete="off"
        @submit.prevent="handleUpdate"
        @change="(formDirty = true), (errors = null)"
    >
        <div class="card">
            <header class="card-header">
                <div class="card-header-title">Edit a Lesson</div>
            </header>
            <div class="card-content p-2">
                <!-- select customer -->
                <div class="notification">
                    <div class="field">
                        <div class="control has-icons-left">
                            <span class="select" id="customer_id">
                                <select
                                    name="customer_id"
                                    v-model="formData.customer_id"
                                    required
                                >
                                    <option value="initial">
                                        Select a customer
                                    </option>
                                    <option
                                        :value="customer.id"
                                        v-for="customer in customers"
                                        :key="customer.name"
                                    >
                                        {{ customer.name }}
                                    </option>
                                </select>
                            </span>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                    </div>

                    <div v-if="errors" class="has-text-danger">
                        {{ errors }}
                    </div>
                </div>

                <!-- lesson date and charges -->
                <div class="notification">
                    <div class="field">
                        <label class="label">Date</label>
                        <div class="control has-icons-left">
                            <span class="icon is-left">
                                <i class="fas fa-calendar-alt"></i>
                            </span>
                            <VueDatePicker
                                v-model="date"
                                class="input"
                                style="max-width: 50%"
                            />
                        </div>
                    </div>
                </div>

                <!-- charges and era -->
                <div class="notification">
                    <div class="field is-grouped is-grouped-multiline">
                        <label class="label mr-2">Payment era</label>
                        <div class="control">
                            <label for="2023">
                                Summer 2024
                                <input
                                    type="radio"
                                    name="payment_era"
                                    value="20241"
                                    id="2023"
                                    class="mr-2"
                                    v-model="formData.payment_era"
                                    checked
                                />
                            </label>
                            <label for="2024">
                                Winter 2024
                                <input
                                    type="radio"
                                    name="payment_era"
                                    v-model="formData.payment_era"
                                    value="20242"
                                    id="2024"
                                />
                            </label>
                        </div>
                        <p
                            class="has-text-weight-bold mb-2"
                            style="width: 100%"
                        >
                            Lession duration and price
                        </p>
                        <div class="control has-icons-left">
                            <span class="icon is-left">
                                <i class="fas fa-clock"></i>
                            </span>
                            <input
                                type="number"
                                name="lesson_duration"
                                id="lesson_duration"
                                class="input"
                                v-model="formData.lesson_duration"
                                readonly
                            />
                        </div>
                        <div class="control has-icons-left">
                            <span class="icon is-left">
                                <i class="fas fa-pound-sign"></i>
                            </span>
                            <input
                                type="text"
                                name="lesson_charge"
                                id="lesson_charge"
                                class="input"
                                v-model="formData.lesson_charge"
                                readonly
                            />
                        </div>
                    </div>
                </div>
                <!-- type -->
                <div class="notification">
                    <div class="field is-grouped-multiline">
                        <p class="has-text-weight-bold mb-3">Rate</p>
                        <div class="control">
                            <label class="checkbox">
                                <input
                                    type="radio"
                                    name="prepaid"
                                    :value="50"
                                    v-model="formData.lesson_rate"
                                />
                                1 * 50 minute lesson
                            </label>
                        </div>

                        <div class="control">
                            <label class="checkbox">
                                <input
                                    type="radio"
                                    name="prepaid"
                                    :value="100"
                                    v-model="formData.lesson_rate"
                                    checked
                                />
                                1 * 100 minute lesson
                            </label>
                        </div>
                        <div class="control">
                            <label class="checkbox">
                                <input
                                    type="radio"
                                    name="prepaid"
                                    :value="500"
                                    v-model="formData.lesson_rate"
                                />
                                Prepaid package of 5 * 100 minute lessons
                            </label>
                        </div>

                        <div class="control mb-2">
                            <label class="checkbox">
                                <input
                                    type="radio"
                                    name="prepaid"
                                    value="test"
                                    v-model="formData.lesson_rate"
                                />
                                Driving test
                            </label>
                        </div>
                    </div>
                </div>

                <!-- payment taken -->

                <div class="notification">
                    <div
                        class="field is-grouped is-grouped-multiline is-flex is-align-items-center"
                    >
                        <div class="control">
                            Was payment taken?
                            <label for="paymentTaken" class="checkbox">
                                <input
                                    type="checkbox"
                                    name="paymentTaken"
                                    :true-value="1"
                                    :false-value="0"
                                    v-model="formData.paymentTaken"
                                />
                                Yes
                            </label>
                        </div>

                        <!-- cash -->
                        <div class="control">
                            Paid cash?
                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    name="paid_cash"
                                    :true-value="1"
                                    :false-value="0"
                                    v-model="formData.paid_cash"
                                />
                                Yes
                            </label>
                        </div>

                        <div
                            class="control has-icons-left"
                            v-if="formData.paymentTaken"
                        >
                            <span class="icon is-left">
                                <i class="fas fa-pound-sign"></i>
                            </span>
                            <input
                                type="number"
                                class="input"
                                name="amountPaymentTaken"
                                ref="amountTaken"
                                v-model="amountPaymentTaken"
                            />
                        </div>
                    </div>
                </div>

                <div class="notification">
                    <div class="control">
                        <label for="lessonCancelled" class="mr-2"
                            >Was lesson cancelled at short notice?

                            <input
                                type="checkbox"
                                :true-value="1"
                                :false-value="0"
                                name="lesson_cancelled"
                                id="lessonCancelled"
                                v-model="formData.lesson_cancelled"
                            />
                            Yes
                        </label>
                    </div>
                </div>

                <!-- discount -->
                <div class="notification">
                    <div class="control">
                        <label class="label">Discount</label>
                        <input
                            type="number"
                            class="input"
                            v-model="formData.discountGiven"
                            style="max-width: 50%"
                        />
                    </div>
                </div>
                <!-- summary -->
                <div class="notification is-warning" v-if="formDirty">
                    Summary:
                    <div>
                        Lesson for
                        <span class="has-text-weight-bold" v-if="customer.name">
                            {{ customer.name }}</span
                        >
                        <span v-else class="has-text-danger"
                            >[Please select a customer]</span
                        >
                        on
                        <span class="has-text-weight-bold">{{
                            dayjs(date).format("dddd, MMMM Do YYYY")
                        }}</span>
                        at
                        <span class="has-text-weight-bold"
                            >&pound;{{ formData.lesson_charge }}</span
                        >
                        <span v-if="formData.paymentTaken">
                            and
                            <span class="has-text-weight-bold"
                                >£{{ formData.amountPaymentTaken }}</span
                            >
                            was paid </span
                        >.
                        <span v-if="formData.lesson_cancelled"
                            >Lesson was cancelled at short notice.</span
                        >
                        <span v-if="formData.discountGiven"
                            ><span class="has-text-weight-bold"
                                >£{{ formData.discountGiven }}
                            </span>
                            was discounted</span
                        >
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="card-footer-item">
                    <div class="has-text-danger" v-if="errors">
                        {{ errors }}
                    </div>
                </div>
                <div class="card-footer-item"></div>
                <div class="card-footer-item">
                    <button
                        class="button is-danger"
                        name="submit"
                        value="submitted"
                    >
                        <span class="icon mr-2">
                            <i class="fa fa-save"></i>
                        </span>
                        Update Lesson
                    </button>
                </div>
            </div>
        </div>
    </form>
</template>

<script setup>
import { ref, computed } from "vue";

import VueDatePicker from "vue3-datepicker";

import dayjs from "dayjs";
import advancedFormat from "dayjs/plugin/advancedFormat.js";
dayjs.extend(advancedFormat);

const emit = defineEmits(["submit"]);

const props = defineProps(["customers", "updates"]);

const formDirty = ref(false);
const customer = ref(props.updates.lesson.customer);
const amountTaken = ref();
const date = ref(new Date(props.updates.lesson.lesson_date));
const errors = ref(null);

const formattedDate = (d) => {
    return dayjs(d).format("YY-MM-DD");
};

const selectedLessonDate = computed(() => {
    return date.value ? formattedDate(date.value) : formattedDate(new Date());
});

const selectedCustomerID = computed(() => {
    return customer.value.id;
});

const selectedLessonDuration = computed(() => {
    return formData.value.lesson_rate == 50 ? 0.833335 : 1.66667;
});

const selectedLessonCharge = computed(() => {
    const rate = formData.value.lesson_rate;
    const era = formData.value.payment_era;
    let result;

    switch (rate) {
        case 50:
            result = 32.5;
            break;
        case 100:
            result = era == 20241 ? 63 : 65;
            break;
        case 500:
            result = era == 20241 ? 60 : 62;
            break;
        case "test":
            result = 110;
            break;
        default:
            result = 65;
    }

    return result;
});

/* zero the payment taken field if checkbox unchecked */
const amountPaymentTaken = ref(props.updates.lesson.amountPaymentTaken);

const computedAmountPaymentTaken = computed(() => {
    if (formData.value.paymentTaken) {
        return amountPaymentTaken.value;
    } else {
        return null;
    }
});

const formData = ref({
    customer_id: props.updates.lesson.customer_id,
    payment_era: 20241,
    lesson_date: selectedLessonDate,
    lesson_duration: selectedLessonDuration,
    lesson_charge: selectedLessonCharge,
    lesson_rate: props.updates.lesson.lesson_rate,
    paymentTaken: props.updates.lesson.paymentTaken,
    amountPaymentTaken: computedAmountPaymentTaken,
    discountGiven: props.updates.lesson.discountGiven,
    lesson_cancelled: props.updates.lesson.lesson_cancelled,
    paid_cash: props.updates.lesson.paid_cash,
});

const handleUpdate = () => {
    axios
        .post(
            "/admin/lesson/update/" + props.updates.lesson.id,
            formData.value,
            {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }
        )
        .then((response) => {
            /* reset form */
            emit("submit", customer);
        })
        .catch((error) => {
            errors.value = error.response.data.message;
        });
};
</script>
