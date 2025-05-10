<template>
    <div
        class="card learn-some-road-signs is-road-signs-component match-height"
    >
        <div class="card-header">
            <p class="card-header-title has-text-weight-normal font-headings">
                Learn some road signs
            </p>
            <div class="card-header-icon">
                {{ counter + 1 }} / {{ signs.length }}
            </div>
        </div>

        <div class="card-content is-clearfix">
            <transition name="fade">
                <div class="p-4">
                    <div class="level is-flex is-justify-content-center">
                        <div class="level-item">
                            <figure class="image is-128x128">
                                <img
                                    v-bind:src="signs[counter].src"
                                    v-bind:alt="`UK road sign: ${signs[counter].meaning}
                                `"
                                />
                            </figure>
                        </div>
                    </div>

                    <div class="level">
                        <div class="level-item">
                            <span class="learn-some-road-signs-answer">
                                <span>{{ signs[counter].meaning }}</span>
                            </span>
                        </div>
                    </div>
                </div>
            </transition>
        </div>

        <div class="card-footer">
            <div class="card-footer-item">
                <span class="next">
                    <button class="button" @click="previous">
                        <span class="icon is-large">
                            <i class="fas fa-angle-double-left"></i>
                        </span>
                        &nbsp;&nbsp;Previous
                    </button>
                </span>
            </div>

            <div class="card-footer-item">
                <span class="next">
                    <button class="button" @click="next">
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

<script>
export default {
    data: function () {
        return {
            signs: [
                {
                    src: "img/driving-images/warning-signs/toads.jpg",
                    meaning: "Migratory toad crossing",
                },

                {
                    src: "img/road-signs/motorways/national-speed-limit.png",
                    meaning: "National speed limit",
                },
                {
                    src: "img/road-signs/motorways/leave-at-next-exit.png",
                    meaning: "Leave motorway at next exit",
                },
                {
                    src: "img/driving-images/warning-signs/crossroad-left-bend.jpg",
                    meaning: "Crossroad with priority to left bend",
                },
                {
                    src: "img/driving-images/regulatory-signs/no-motorcycles.jpg",
                    meaning: "No motorcycles",
                },
                // {
                //     src: "img/driving-images/unique/chevron.png",
                //     meaning: "Chevron - sharp bend ahead",
                // },
                {
                    src: "img/road-signs/prohibitory/no-pedestrians.png",
                    meaning: "No pedestrians",
                },
                {
                    src: "img/road-signs/unique/give-way.png",
                    meaning: "Give way",
                },
                {
                    src: "img/road-signs/positive/minimum-speed-limit.png",
                    meaning: "Minimum speed limit",
                },
                {
                    src: "img/road-signs/prohibitory/no-cars.png",
                    meaning: "No cars",
                },
                {
                    src: "img/road-signs/warnings/pedestrians-in-road.png",
                    meaning: "Pedestrians in the road",
                },
                {
                    src: "img/road-signs/prohibitory/no-explosives.png",
                    meaning: "No explosives",
                },
                {
                    src: "img/road-signs/positive/contraflow-bike-lane.png",
                    meaning: "Contraflow bike lane",
                },
                {
                    src: "img/road-signs/prohibitory/no-vehicles.png",
                    meaning: "No vehicles",
                },
                {
                    src: "img/driving-images/bus-and-cycle-signs/bicycles.jpg",
                    meaning: "Warning of cycles",
                },
                {
                    src: "img/driving-images/on-street-parking/no-stopping[2].jpg",
                    meaning: "No stopping",
                },
                {
                    src: "img/driving-images/direction-and-tourist-signs/diversion-diamond.jpg",
                    meaning: "Diversion - follow diamond symbol",
                },
                {
                    src: "img/driving-images/motorway-signs/keep-two-chevrons-apart.jpg",
                    meaning: "Keep two chevrons apart",
                },
                {
                    src: "img/driving-images/low-bridge-signs/arch-bridge-height-warning.jpg",
                    meaning:
                        "Warning of height restriction in centre of arched bridge",
                },
                {
                    src: "img/driving-images/motorway-signs/all-lanes-closed.jpg",
                    meaning: "All lanes closed on motorway",
                },
                {
                    src: "img/driving-images/on-street-parking/park-on-kerb-times.jpg",
                    meaning: "Times at which you can park on the kerb",
                },
                {
                    src: "img/driving-images/on-street-parking/park-on-kerb-times.jpg",
                    meaning: "Times at which you can park on the kerb",
                },
                {
                    src: "img/driving-images/information-signs/no-through-route-on-left.jpg",
                    meaning: "No through route on left",
                },
                {
                    src: "img/driving-images/warning-signs/hump-back-bridge.jpg",
                    meaning: "Hump back bridge",
                },
                {
                    src: "img/driving-images/warning-signs/falling-rocks.jpg",
                    meaning: "Falling rocks",
                },
                {
                    src: "img/road-signs/traffic-lights/toucan.png",
                    meaning: "Toucan crossing display",
                },
                {
                    src: "img/driving-images/road-works-and-temporary/when-red-light-shows-wait-here.jpg",
                    meaning: "Temporary traffic light information",
                },
                {
                    src: "img/driving-images/warning-signs/danger.jpg",
                    meaning: "Danger",
                },
                {
                    src: "img/driving-images/warning-signs/quayside.jpg",
                    meaning: "Quayside",
                },
                {
                    src: "img/driving-images/regulatory-signs/no-overtaking.png",
                    meaning: "No overtaking",
                },
                {
                    src: "img/driving-images/direction-and-tourist-signs/diversion-triangle-alt.jpg",
                    meaning: "Follow symbol for diversion route",
                },
                {
                    src: "img/driving-images/information-signs/lane-3-ends.jpg",
                    meaning: "Lane three is closing",
                },
                {
                    src: "img/driving-images/level-crossing-signs/open-crossing.jpg",
                    meaning: "Open level crossing",
                },
                {
                    src: "img/driving-images/motorway-signs/lane-closed.jpg",
                    meaning: "Lane is closed",
                },
                {
                    src: "img/driving-images/motorway-signs/lane-guidance-alt.jpg",
                    meaning: "Lane guidance",
                },
            ],
            counter: 0,
        };
    },

    methods: {
        next: function () {
            this.counter++;
            if (this.counter >= this.signs.length) {
                this.counter = 0;
            }
        },
        previous: function () {
            this.counter--;
            if (this.counter < 0) {
                this.counter = this.signs.length - 1;
            }
        },
    },
}; // default
</script>
