<template>
    <div
        class="box has-background-light areas-notification has-text-centered clearfix"
    >
        <p class="strong">Do I work in your postcode?</p>
        <form id="postcode-form" class="is-centered has-text-centered">
            <div class="field has-addons">
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        placeholder="BR7 5IP"
                        id="postcode-search"
                        pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}"
                        required
                    />
                </div>
                <div class="control">
                    <input
                        type="submit"
                        class="button is-info has-text-white"
                        id="postcode-search-button"
                        value="Check"
                    />
                </div>
            </div>
        </form>
        <br />
        <div class="search-results notification is-warning is-hidden"></div>
    </div>
</template>
<script setup>
import { onMounted } from "vue";
onMounted(() => {
    let postcodeSearch = document.querySelector("#postcode-search");
    let theForm = document.querySelector("#postcode-form");
    let postcodeButton = document.querySelector("#postcode-search-button");
    let postcodeResults = document.querySelector(".search-results");

    const postcodes = {
        SE3: "Blackheath and Kidbrooke",
        SE6: "Catford",
        SE9: "Eltham, New Eltham and Mottingham",
        SE12: "Lee and Grove Park",
        SE13: "Lewisham and Hither Green",
        SE18: "Woolwich and Plumstead",
        BR1: "Bromley, Bickley and Downham",
        BR2: "Bromley, Bromley Common and Hayes",
        BR3: "Beckenham, Shortlands and Park Langley",
        BR5: "Orpington and Petts Wood",
        BR7: "Chislehurst and Elmstead",
        DA14: "Sidcup and Foots Cray",
        DA15: "Sidcup, Longlands and Avery Hill",
    };

    theForm.addEventListener("submit", function (e) {
        e.preventDefault();
        let postcode = postcodeSearch.value;
        let postarea = postcode.split(" ")[0].trim().toUpperCase();
        postcodeResults.classList.remove("is-hidden");

        for (let [postcode, area] of Object.entries(postcodes)) {
            if (postcode == postarea) {
                postcodeResults.textContent =
                    "Yes, i do work in " + postcodes[postcode];
                break;
            } else {
                postcodeResults.textContent =
                    "Sorry, but I don't work in " + postarea;
            }
        }
    });
});
</script>
