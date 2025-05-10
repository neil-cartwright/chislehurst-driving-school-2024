<template>
    <div class="notification is-warning" v-if="success">Email sent</div>
    <div class="notification is-warning" v-if="errors">{{ errors }}</div>
    <div class="card mb-4">
        <div class="card-header">
            <div class="card-header-title">
                Send links to {{ customer.name }}
            </div>
        </div>

        <div class="card-content" v-if="homework_array.length">
            <form @submit.prevent="sendHomework">
                <div class="notification mb-2">
                    <div class="homework-object">
                        <p class="has-text-weight-bold mb-1">title/link</p>
                        <label
                            v-for="item in homework_array"
                            class="is-flex is-align-items-center"
                        >
                            <input
                                type="text"
                                class="input w-half"
                                :placeholder="item"
                                v-model="homework_object[item]"
                                ref="description"
                            />
                            <span>{{ item }}</span>
                        </label>
                    </div>
                    <div class="control">
                        <button
                            class="button"
                            type="submit"
                            @click.prevent="sendHomework"
                        >
                            <span v-if="loading">
                                <i class="fa fa-spinner fa-spin"></i
                            ></span>
                            <span v-else>
                                Send homework to {{ customer.name }}</span
                            >
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <!-- two card contents -->
        <div class="card-content">
            <form class="homework-form">
                <div class="columns is-multiline">
                    <!-- handouts -->

                    <div class="column is-4 homework-column">
                        <label class="label">
                            Handouts
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>
                        <div class="checkbox-container">
                            <label class="checkbox" v-for="handout in handouts">
                                <input
                                    type="checkbox"
                                    :value="'handouts/' + handout"
                                    v-model="homework_array"
                                />
                                <span>{{ stripChars(handout) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- highway code -->

                    <div class="column is-4 homework-column">
                        <label class="label">
                            Highway Code
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>

                        <div class="checkbox-container">
                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    value="text-books/highway-code/highway-code"
                                />
                                <span>Highway Code</span>
                            </label>

                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    value="text-books/know-your-road-signs/know-your-road-signs"
                                />
                                <span>Know your road signs</span>
                            </label>

                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    value="text-books/dia/emergency-vehicles"
                                />
                                <span>Emergency Vehicles</span>
                            </label>

                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    value="text-books/dia/show-me-tell-me-1"
                                />
                                <span>Show me / Tell me sheet 1</span>
                            </label>

                            <label class="checkbox">
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    value="text-books/dia/show-me-tell-me-2"
                                />
                                <span>Show me / Tel me sheet 2</span>
                            </label>
                        </div>
                    </div>

                    <!-- essential skills -->

                    <div class="column is-4 homework-column">
                        <label class="label"
                            >Essential skills
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>

                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="essentialSkill in essentialSkills"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="
                                        'text-books/essential-skills/' +
                                        essentialSkill
                                    "
                                />
                                <span>{{ stripChars(essentialSkill) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- roadcraft -->

                    <div class="column is-4 homework-column">
                        <label class="label"
                            >Roadcraft
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i> </span
                        ></label>

                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="roadcraftChapter in roadcraft"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="
                                        'text-books/roadcraft/' +
                                        roadcraftChapter
                                    "
                                />
                                <span>{{ stripChars(roadcraftChapter) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- how cars work -->

                    <div class="column is-4 homework-column">
                        <label class="label"
                            >How cars work
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i> </span
                        ></label>
                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="howCarsWorkChapter in howCarsWork"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="
                                        'text-books/how-cars-work/' +
                                        howCarsWorkChapter
                                    "
                                />
                                <span>{{
                                    stripChars(howCarsWorkChapter)
                                }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- videos -->
                    <div class="column is-4 homework-column">
                        <label class="label"
                            >Road safety videos
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>

                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="(url, title) in roadSafetyVideos"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="'videos/road-safety#' + title"
                                />
                                <span>{{ stripChars(title) }}</span>
                            </label>
                            <label
                                class="checkbox"
                                v-for="(url, title) in thinkVideos"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="'videos/think#' + title"
                                />
                                <span>{{ stripChars(title) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- learn engineering -->

                    <div class="column is-4 homework-column">
                        <label class="label"
                            >Learn engineering videos
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>
                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="(url, title) in learnEngineeringVideos"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="'videos/learn-engineering#' + title"
                                />
                                <span>{{ stripChars(title) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- world driving -->

                    <div class="column is-4 homework-column">
                        <label class="label"
                            >World Driving videos
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>
                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="(url, title) in worldDrivingVideos"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="'videos/world-driving#' + title"
                                />
                                <span>{{ stripChars(title) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- advance driving -->

                    <div class="column is-4 homework-column">
                        <label class="label"
                            >Advance Driving videos
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>
                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="(url, title) in advanceDrivingVideos"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="'videos/advance-driving#' + title"
                                />
                                <span>{{ stripChars(title) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- science garage -->

                    <div class="column is-4 homework-column">
                        <label class="label"
                            >Science Garage Videos
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>
                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="(url, title) in scienceGarageVideos"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    class="select-homework"
                                    :value="'videos/science-garage#' + title"
                                />
                                <span>{{ stripChars(title) }}</span>
                            </label>
                        </div>
                    </div>

                    <!-- driver-active -->
                    <div
                        class="column is-4 homework-column"
                        v-for="(driverActiveCategory, title) in driverActive"
                        :key="title"
                    >
                        <label class="label"
                            >DA - {{ stripChars(title) }}
                            <span class="icon is-medium">
                                <i class="fas fa-caret-down"></i>
                            </span>
                        </label>

                        <div class="checkbox-container">
                            <label
                                class="checkbox"
                                v-for="(link, item) in driverActiveCategory"
                            >
                                <input
                                    type="checkbox"
                                    v-model="homework_array"
                                    :value="
                                        'https://www.driveractive.com/Learners_Online/' +
                                        link +
                                        '.html'
                                    "
                                />
                                <span>{{ item }}</span>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script setup>
import { ref, onMounted, computed, watch } from "vue";
import _ from "lodash";
import axios from "axios";

const loading = ref(false);
const success = ref(false);
const errors = ref(null);
const description = ref();
const showColumns = ref(false);

const props = defineProps([
    "customer",
    "handouts",
    "essential-skills",
    "roadcraft",
    "highway-code",
    "emergency-vehicles",
    "know-your-road-signs",
    "how-cars-work",
    "world-driving-videos",
    "learn-engineering-videos",
    "science-garage-videos",
    "think-videos",
    "road-safety-videos",
    "advance-driving-videos",
    "driver-active",
]);
// array of items to send
const homework_array = ref([]);
// items to send with prefacing description
const homework_object = ref({});
// reverse them - description: link

watch(homework_array, () => {
    // clear out object then repopulate
    homework_object.value = {};

    if (homework_array.value.length) {
        homework_array.value.forEach((item) => {
            if (item.startsWith("https://www.driveractive")) {
                let splitItem = item.split("/");
                homework_object.value[item] = stripChars(
                    splitItem[splitItem.length - 2]
                );
            } else {
                homework_object.value[item] = stripChars(afterSlash(item));
            }
        });
    }
});

watch(showColumns, () => {
    showColumn(showColumns.value);
});

const inverted_object = computed(() => {
    if (homework_array.value.length) {
        return _.invert(homework_object.value);
    } else {
        return null;
    }
});

const stripChars = (str) => {
    return str.replaceAll(/[_#-]/g, " ");
};

const afterSlash = (str) => {
    return str.substring(str.lastIndexOf("/") + 1);
};

const sendHomework = () => {
    loading.value = true;
    axios
        .post("/admin/homework/send/" + props.customer.id, {
            homework: inverted_object.value,
        })
        .then((res) => {
            loading.value = false;
            success.value = true;
            homework_array.value = [];
            homework_object.value = {};
            inverted_object.value = {};

            setTimeout(() => {
                success.value = false;
            }, 5000);
        })
        .catch((err) => {
            loading.value = false;
            if (err) {
                errors.value = err.response.data.message;
            }
        });
};

const showColumn = () => {
    const labels = document.querySelectorAll("label.label");
    labels.forEach((label) => {
        label.nextSibling.classList.add("is-hidden");
        label.addEventListener("click", (e) => {
            e.currentTarget.nextSibling.classList.toggle("is-hidden");
            if (label.classList.contains("is-active")) {
                label.classList.remove("is-active");
            } else {
                label.classList.add("is-active");
            }
        });
    });
};

onMounted(() => {
    showColumn(false);
});
</script>
