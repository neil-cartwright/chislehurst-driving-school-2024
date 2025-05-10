<template>
    <section
        class="section has-background-dark cookie-consent"
        v-show="showCookieConsent"
    >
        <div class="level">
            <div class="level-item has-text-white">
                <p class="mr-2">This site uses cookies.</p>
                <button class="button is-success" @click="consentToCookies">
                    That's ok!
                </button>
            </div>
        </div>
    </section>
</template>
<script setup>
// https://github.com/cmp-cc/vue-cookies
import VueCookies from "vue-cookies";
import { ref, onMounted } from "vue";

$cookies.config("72d");

const showCookieConsent = ref(true);

const consentToCookies = () => {
    $cookies.set("chislehurst_driving_school_consent", true);
    showCookieConsent.value = false;
};

onMounted(() => {
    if ($cookies.get("chislehurst_driving_school_consent")) {
        showCookieConsent.value = false;
    }
});
</script>
<style scoped>
.cookie-consent {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
}
</style>
