<template>
    <div class="tag is-small is-hidden-tablet" ref="card">{{ quizTitle }}</div>
    <div class="card">
        <div class="card-header">
            <p class="card-header-title">
                <span
                    >Q{{ counter + 1 }}: {{ questions[counter].question }}</span
                >
            </p>
            <p class="card-header-icon">
                {{ counter + 1 }}/{{ questions.length }}
            </p>
        </div>

        <transition name="fade">
            <div class="card-image">
                <figure class="image">
                    <img
                        v-bind:src="questions[counter].imgSrc"
                        :alt="questions[counter].alt"
                        class="quiz-img"
                    />
                </figure>
            </div>
        </transition>

        <div class="card-content">
            <transition
                enter-active-class="animate__animated animate__zoomInUp"
                leave-active-class="animate__animated animate__zoomOut"
            >
                <span
                    class="icon is-large is-pulled-right has-text-success"
                    v-if="correct"
                >
                    <i class="far fa-check-circle fa-2x"></i
                ></span>
            </transition>

            <transition
                enter-active-class="animate__animated animate__wobble"
                leave-active-class="animate__animated animate__flipOutY"
            >
                <span
                    class="icon is-large is-pulled-right has-text-danger"
                    v-show="answeredIncorrect"
                >
                    <i class="far fa-times-circle fa-2x"></i>
                </span>
            </transition>

            <br />

            <div class="menu">
                <ul class="menu-list">
                    <li
                        class="answer"
                        v-for="(answer, index) in questions[counter].answers"
                    >
                        <a
                            @click.prevent="getAnswer(answer)"
                            :class="{
                                'has-background-success has-text-white has-text-weight-bold':
                                    answer.val === 'correct',
                                'has-background-danger':
                                    answer.val === 'incorrect',
                            }"
                            class="the-answer"
                        >
                            {{ answer.answer }}
                        </a>
                    </li>
                </ul>
            </div>

            <div
                class="is-flex is-justify-content-center is-align-items-center is-flex-direction-column"
            >
                <div class="my-4">
                    <a @click="explainerOpen = !explainerOpen" class="button">{{
                        explainerButtonText
                    }}</a>
                </div>
                <transition
                    enter-active-class="animate__animated animate__flipInX"
                    leave-active-class="animate__animated animate__flipOutX"
                >
                    <div
                        v-show="explainerOpen"
                        class="notification has-background-warning"
                    >
                        <p>{{ questions[counter].explanation }}</p>
                    </div>
                </transition>
            </div>
        </div>
        <!-- card-content -->
        <div class="card-footer">
            <div class="card-footer-item">
                <div class="has-text-weight-bold">
                    <transition
                        enter-active-class="animate__animated animate__fadeInLeft"
                        leave-active-class="animate__animated animate__fadeOutUp"
                    >
                        <div class="tags are-multiline has-addons are-small">
                            <span class="tag is-light">
                                Answered: {{ questionsAnswered }}
                            </span>
                            <span class="tag is-dark">
                                Correct: {{ score }}
                            </span>
                        </div>
                    </transition>
                </div>
            </div>

            <div class="card-footer-item">
                <transition
                    enter-active-class="animate__animated animate__tada"
                    leave-active-class="animate__animated animate__bounceOutRight"
                >
                    <a
                        class="button is-info has-text-white has-text-weight-bold"
                        v-show="answered"
                        @click="nextQuestion"
                        >Next question</a
                    >
                </transition>
            </div>
            <!-- footer item -->
        </div>
        <!-- footer -->
    </div>

    <div class="modal" :class="{ 'is-active': quizCompleted }">
        <div class="modal-background"></div>
        <div class="modal-content" style="padding: 0">
            <div
                class="notification is-white is-flex is-justify-content-center is-align-items-center is-flex-direction-column"
            >
                <button class="delete" v-on:click="restartTest"></button>
                {{ quizTitle }} quiz over!
                <span class="has-text-weight-bold"
                    >You scored {{ score }} out of {{ questions.length }}</span
                ><br />
                <br />
                <button v-on:click="restartTest" class="button is-info mt-4">
                    Take another quiz
                </button>
            </div>
        </div>
    </div>
</template>
<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.3s ease-in-out;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
.card-image {
    padding: 2rem 0 0;
    :is(img) {
        max-height: 250px;
        width: auto;
    }
}
.card-content {
    padding: 0;
}
.quiz-img {
    max-width: 250px;
    margin-left: auto;
    margin-right: auto;
}
.menu {
    width: 100%;
}

.menu-list {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.menu-list li {
    width: 100%;
    border-bottom: 1px solid silver;
    font-size: 18px;
}

.menu-list li a {
    text-align: center;
    display: block;
    width: 100%;
}
</style>
<script>
export default {
    data: function () {
        return {
            questions: questions,
            quizTitle: questions.title,
            counter: 0,
            score: 0,
            correct: false,
            questionsAnswered: 0,
            answered: false,
            quizCompleted: false,
            hover: false,
            explainerOpen: false,
            explainerButtonText: "Explanation",
            hasContentChanged: true,
        };
    },

    methods: {
        getAnswer: function (answer) {
            if (this.answered === false) {
                this.answered = true;
                this.questionsAnswered++;

                if (answer.correct) {
                    answer.val = "correct";
                    this.score++;
                    this.correct = true;
                } else {
                    answer.val = "incorrect";
                    this.explainerOpen = true;
                    // sets green background on correct answer after timeout
                    setTimeout(
                        function () {
                            for (
                                let i = 0;
                                i < questions[this.counter].answers.length;
                                i++
                            ) {
                                let otherAnswers =
                                    questions[this.counter].answers[i];
                                if (otherAnswers.correct == true) {
                                    questions[this.counter].answers[i].val =
                                        "correct";
                                }
                            }
                        }.bind(this),
                        1000
                    );
                } // else
            }
        },

        nextQuestion: function () {
            this.correct = false;
            this.hasContentChanged = false;
            setTimeout(() => {
                this.hasContentChanged = true;
                this.counter++;
                this.answered = false;
                this.explainerOpen = false;
                if (this.counter == questions.length) {
                    this.counter = 0;
                    this.quizCompleted = true;
                }
            }, 300);
        },

        restartTest: function () {
            this.saveScore();
            location.replace("/quiz");
        },

        saveScore: function () {
            this.quizTitle = this.quizTitle.toLowerCase();
            localStorage.setItem(
                this.quizTitle,
                this.score + "/" + this.questionsAnswered
            );
        },
    }, // methods

    computed: {
        answeredIncorrect: function () {
            return (
                this.answered && this.correct == false && this.hasContentChanged
            );
        },
    },

    mounted() {
        this.$refs.card.scrollIntoView(true);
    },
};
</script>
