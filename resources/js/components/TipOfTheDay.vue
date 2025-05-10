<template>
    <article class="notification is-warning" :key="componentKey">
        <div
            class="is-flex is-justify-content-space-between is-align-items-center mb-4"
        >
            <h1 class="font-headings">Random driving tips</h1>
            <a @click="changeTip()" class="button is-small is-danger"
                ><i class="fa fa-plus"></i
            ></a>
        </div>
        <div>{{ theTip() }}</div>
    </article>
</template>

<script setup>
import { ref } from "vue";
const componentKey = ref(0);
const tips = ref([
    "In order to keep the clutch steady try keeping your left heel on the floor.",
    "You can sometimes make gear changes smoother by feathering the gas pedal as you release the clutch.",
    "Except in an emergency, check your interior mirror before you brake, and before any anticipated braking.",
    "Keep a pair of sunglasses in the car. Glare can occur in all seasons, especially in winter and can seriously affect your ability to see clearly.",
    "Try to have a plan A, B and C about where you're going to park at the end of your journey.",
    "Don't eat a big meal before a long drive. It will make you sleepy.",
    "Check your tyre pressures regularly. Under inflated tyres cause the engine to have to work harder, and you'll spend more money on petrol.",
    "Check your tyre tread. It should be at least 1.6mm deep. Using a 20 pence piece, insert the coin into the tread and the border of the coin should not be visible.",
    "Clean the inside of the windscreen regularly. Dust affects visibility, especially at night and in bright sunshine.",
    "Always check your blind spot before moving off. It takes one second and could save you a lot of grief.",
    "Open the door from the driver's seat with your right hand, holding the door with your left hand. The door won't open too wide if there is a gust of wind. Make sure you check for cyclists before opening it.",
    "Check behind you regularly, and before inicating, changing speed and changing direction.",
    "Don't stall! Hold the clutch steady for a moment or two as the car starts to pull away.",
    "Avoid jerky stops. If you can afford to, ease off the brake pedal slightly just before you stop.",
    "Always check your blind spots before moving away.",
    "Clean your wiper blades regularly with a cloth to prevent them from smearing your windows.",
    "Where you can, use your turn signals BEFORE you start to slow down.",
    "If the driver behind is dangerously tailgating consider pulling over somewhere safe to let them pass.",
    "Your overall stopping distance at 20mph is almost half of what it is at 30mph. Drive slower in situations where you're more likely to have to stop.",
    "Flashing your headlights can cause flash blindness to oncoming road users. Only flash your lights to warn other road users of your presence.",
    "Be realistic about how long your journey is likely to take. Anticipate longer journey times in bad weather.",
    "Use the handbrake while waiting at junctions. If someone else bumps into you, your vehicle is much less likely to move forward into the junction.",
    "Leave a gap of at least two seconds between you and the vehicle in front. Keep at least four seconds gap in poor conditions.",
    "Keep your mobile phone in the glove box or in the boot",
]);

const amountTips = () => {
    return tips.value.length;
};
const getRandomNum = () => {
    let randNum = Math.floor(Math.random() * tips.value.length);
    if (randNum >= amountTips()) {
        return getRandomNum();
    }
    return randNum;
};
const theTip = () => {
    return tips.value[getRandomNum()];
};
const changeTip = () => {
    return forceUpdate();
};
const forceUpdate = () => {
    return (componentKey.value += 1);
};
</script>
