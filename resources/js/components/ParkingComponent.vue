<template>
    <div class="card">
        <div class="card-header">
            <div
                class="card-header-title font-headings has-text-weight-normal is-centered"
            >
                How to parallel park
            </div>
        </div>
        <div class="card-image">
            <div class="kerb"></div>
            <div class="car-two"></div>
            <div class="obj-car"></div>
            <div
                class="parking-car"
                v-bind:class="{
                    'start-parking': steps.startParking,
                    'step-one': steps.stepOne,
                    'step-two': steps.stepTwo,
                    'step-three': steps.stepThree,
                    'step-four': steps.stepFour,
                    'is-invisible': steps.startAgain,
                }"
            ></div>
            <div
                v-if="!steps.startParking"
                class="parking-title has-text-white"
            >
                <p class="is-4 has-text-white font-headings">
                    Chislehurst Driving School
                </p>
            </div>
        </div>
        <div
            class="card-content has-text-centered has-background-warning is-italic p-4"
            v-if="steps.startParking"
        >
            <p v-if="!steps.startParking && !steps.stepOne">
                <span
                    >Find a gap between cars which is safe, legal and
                    convenient.</span
                >
            </p>

            <p v-if="steps.startParking && !steps.stepOne">
                <span
                    >Remember to check behind and signal if necessary. When you
                    have stopped get quickly into reverse gear to show the
                    reversing lights.<br /><strong>Step one:</strong> When
                    you're next to the car you wish to reverse behind please
                    check all around and if it's safe steer to the left.</span
                >
            </p>

            <p v-if="steps.stepOne && !steps.stepTwo">
                <span
                    ><strong>Step two:</strong> When you are at the
                    <span class="strong">correct angle</span> straighten the
                    wheels and reverse slowly. Be mindful of pedestrians and
                    cyclists. Try to line up the offside (driver-side) of your
                    vehicle with the nearside (passenger-side) corner of the
                    vehicle behind.</span
                >
            </p>

            <p v-if="steps.stepTwo && !steps.stepThree">
                <span
                    ><strong>Step three:</strong> Before you reach the kerb
                    steer right</span
                >
            </p>

            <p v-if="steps.stepThree && !steps.stepFour">
                <span
                    ><strong>Step four:</strong> Straighten the wheels again
                    only when you are parallel with the pavement
                </span>
            </p>
        </div>
        <div class="card-footer">
            <div class="card-footer-item">
                <button
                    class="button is-info"
                    @click="startThePark"
                    v-if="!steps.startParking && !steps.stepOne"
                >
                    Let's start!
                </button>
                <button
                    class="button is-info"
                    @click="startStepOne"
                    v-if="steps.startParking && !steps.stepOne"
                >
                    Steer to the left
                </button>
                <button
                    class="button is-info"
                    @click="startStepTwo"
                    v-if="steps.stepOne && !steps.stepTwo"
                >
                    Reverse directly towards the kerb
                </button>
                <button
                    class="button is-info"
                    @click="startStepThree"
                    v-if="steps.stepTwo && !steps.stepThree"
                >
                    Steer away from the kerb
                </button>
                <button
                    class="button is-info"
                    @click="startStepFour"
                    v-if="steps.stepThree && !steps.stepFour"
                >
                    Tidy up, if necessary
                </button>
                <button
                    class="button is-info is-inverted"
                    @click="goStartAgain"
                    v-if="steps.stepFour"
                >
                    Start Again
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.card-image {
    background: #eee;
    position: relative;
    min-height: 350px;
    min-width: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
.kerb {
    background: ghostwhite;
    box-shadow: 3px 3px 1px #bbb;
    height: 100%;
    width: 50px;
    position: absolute;
    bottom: 0;
    border-right: 2px solid yellow;
}
.obj-car,
.parking-car,
.car-two {
    height: 100px;
    width: 50px;
    border-radius: 3px;
    position: absolute;
}
.obj-car {
    left: 55px;
    background: url("/img/vehicle-images/purple-car.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    top: 15px;
}
.car-two {
    left: 55px;
    top: 300px;
    background: url("/img/vehicle-images/orange-car.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
.parking-car {
    background: url("/img/vehicle-images/green-car.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    left: 120px;
    top: 500px;
    transition: top 3s ease-in-out, left 3s ease-in-out,
        transform 3s ease-in-out;
}
.parking-title {
    background: transparent;
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.parking-car.start-parking.step-one:after {
    content: "";
    height: 267px;
    border-right: 1px dotted black;
    display: block;
}
.parking-car.start-parking {
    top: 15px;
    transition: all 3s ease-out;
}
.parking-car.start-parking.step-one {
    transform: rotate(36deg);
    transform-origin: 0% 90%;
    top: 45px;
    background: url("/img/vehicle-images/green-car-left-steering.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
.parking-car.start-parking.step-one.step-two {
    left: 69px;
    top: 115px;
    background: url("/img/vehicle-images/green-car.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
.parking-car.start-parking.step-one.step-two.step-three {
    left: 55px;
    top: 170px;
    transform: rotate(0deg);
    background: url("/img/vehicle-images/green-car-right-steering.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
.parking-car.start-parking.step-one.step-two.step-three:after {
    height: 0;
}
.parking-car.start-parking.step-one.step-two.step-three.step-four {
    top: 158px;
    background: url("/img/vehicle-images/green-car.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
}
button {
    margin-right: 3px;
    max-width: 90%;
}
.is-invisible {
    visibility: hidden;
}
.card-content p {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.strong {
    font-weight: 700;
}
.card-footer-item button {
    white-space: normal;
}
</style>

<script>
let parkingCar = document.querySelector(".parking-car");

export default {
    data: function () {
        return {
            steps: {
                startParking: false,
                stepOne: false,
                stepTwo: false,
                stepThree: false,
                stepFour: false,
                startAgain: false,
            },
        };
    },
    methods: {
        startThePark: function () {
            this.steps.startAgain = false;
            return (this.steps.startParking = true);
        },
        startStepOne: function () {
            return (this.steps.stepOne = true);
        },
        startStepTwo: function () {
            return (this.steps.stepTwo = true);
        },
        startStepThree: function () {
            return (this.steps.stepThree = true);
        },
        startStepFour: function () {
            return (this.steps.stepFour = true);
        },
        goStartAgain: function () {
            for (var i in this.$data.steps) {
                if (Object.hasOwnProperty.call(this.$data.steps, i)) {
                    this.$data.steps[i] = false;
                }
            }
            this.steps.startAgain = true;
        },
    },
};
</script>
