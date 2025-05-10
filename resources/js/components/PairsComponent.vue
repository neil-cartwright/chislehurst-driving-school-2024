<template>
    <div class="card mb-4" :key="reRenderKey">
        <div class="card-header">
            <div
                class="card-header-title has-text-weight-normal is-uppercase font-headings is-size-6"
            >
                Pairs
            </div>
            <div class="card-header-icon is-size-7">
                <span v-if="previousHighScore"
                    >PB&nbsp;<span class="tag">{{
                        previousHighScore
                    }}</span></span
                >&nbsp; Current&nbsp;<span class="tag">{{ clicks }}</span>
            </div>
        </div>
        <div class="card-content">
            <div class="cards">
                <div
                    class="flip-card is-text"
                    v-for="(n, idx) in shuffledNumbers"
                    :key="idx"
                    @click="flipTheCard($event, n)"
                    ref="flipCards"
                >
                    <div class="flip-card-inner">
                        <div
                            class="flip-card-front is-size-7"
                            :data-name="images[n].name"
                        ></div>
                        <img
                            class="flip-card-back"
                            :src="images[n].src"
                            :alt="images[n].name"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-footer-item">
                <span>{{ message }}</span>
            </div>
            <div class="card-footer-item" v-if="showPlayAgainButton">
                <button class="button is-success" @click="playAgain">
                    Play again
                </button>
            </div>
        </div>
    </div>
</template>
<script setup>
import pairsImages from "../pairs-images.js";
import { ref, onMounted } from "vue";

const clicks = ref(0);
const countFlipped = ref(0);
const flipCards = ref([]);
const images = pairsImages;
const message = ref("Click a square to start");
const pair = ref([]);
const previousHighScore = ref(null);
const reRenderKey = ref(0);
const score = ref(0);
const showPlayAgainButton = ref(false);
const shuffledNumbers = ref([]);

const flipTheCard = (event, n) => {
    if (
        !event.target.parentElement.parentElement.classList.contains("flipped")
    ) {
        clicks.value += 1;
        showPlayAgainButton.value = false;
        event.target.parentElement.parentElement.classList.toggle("flipped");
        if (
            event.target.parentElement.parentElement.classList.contains(
                "matched"
            )
        ) {
            return;
        }
        message.value = event.target.dataset.name;
        countFlipped.value += 1;
        createAPair(event, n);
        if (countFlipped.value > 2) {
            unFlip();
        }
    }
};

const createAPair = (event, n) => {
    let target = event.target;
    pair.value.push(n);
    if (pair.value.length > 1) {
        checkToSeeIfIsAMatch(target, pair.value, n);
    }
};

const checkToSeeIfIsAMatch = (target, array, n) => {
    if (array[0] == array[1]) {
        score.value += 1;
        // add matched class to matched elements
        target.parentElement.parentElement.classList.add("matched");
        flipCards.value.forEach((card) => {
            if (card.classList.contains("flipped")) {
                card.classList.add("matched");
            }
        });
        message.value = "You found a match!";
        countFlipped.value = 0;
        pair.value = [];
        if (score.value == images.length) {
            message.value = `You completed the game with ${clicks.value} clicks`;
            showPlayAgainButton.value = true;
        }
    } else {
        setTimeout(() => {
            countFlipped.value = 0;
            pair.value = [];
            message.value = "Try again!";
            unFlip();
        }, 500);
    }
};

const unFlip = () => {
    let allFlippedEls = flipCards.value;
    allFlippedEls.forEach((fc) => {
        if (fc.classList.contains("flipped")) {
            fc.classList.remove("flipped");
        }
    });
    countFlipped.value = 0;
};

const getRandomNumbers = () => {
    let arrayOfNumbers = [];
    for (let i = 0; i < images.length; i++) {
        // have every number twice
        arrayOfNumbers.push(i);
        arrayOfNumbers.push(i);
    }
    let shuffled = shuffle(arrayOfNumbers);
    shuffledNumbers.value = shuffled;
    return shuffled;
};

const shuffle = (array) => {
    let currentIndex = array.length,
        randomIndex;
    // While there remain elements to shuffle...
    while (currentIndex != 0) {
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex--;
        // And swap it with the current element.
        [array[currentIndex], array[randomIndex]] = [
            array[randomIndex],
            array[currentIndex],
        ];
    }
    return array;
};

const playAgain = () => {
    reRenderKey.value += 1;
    if (!previousHighScore.value) {
        localStorage.setItem("Pairs high score", clicks.value);
    }
    if (clicks.value < previousHighScore.value) {
        localStorage.setItem("Pairs high score", clicks.value);
        message.value = "New Lowest Score!";
    }
    score.value = 0;
    clicks.value = 0;
    showPlayAgainButton.value = false;
    message.value = "Click a square to start!";
    getRandomNumbers();
    previousHighScore.value = localStorage.getItem("Pairs high score");
};

onMounted(() => {
    getRandomNumbers();
    previousHighScore.value = localStorage.getItem("Pairs high score");
});
</script>

<style scoped>
.cards {
    display: grid;
    grid-template-columns: repeat(4, 50px);
    justify-content: center;
    align-items: center;
    padding: 1rem 0;
}
.card-content {
    padding: 4px;
}
.flip-card {
    background-color: transparent;
    width: 50px;
    height: 50px;
    border: 1px solid #f1f1f1;
    perspective: 1000px;
}
.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
    box-shadow: 1px 1px 1px #bbb;
}
.flip-card:hover {
    cursor: pointer;
}
.flip-card.flipped .flip-card-inner,
.flip-card.matched .flip-card-inner {
    transform: rotateY(180deg);
}
.flip-card-front,
.flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden; /* Safari */
    backface-visibility: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
}
.flip-card-front {
    background-color: whitesmoke;
    color: black;
}
.flip-card-back {
    background-color: white;
    color: white;
    transform: rotateY(180deg);
}
</style>
