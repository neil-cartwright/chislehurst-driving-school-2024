<template>
    <div class="columns">
        <div class="column is-3">
            <div class="menu">
                <p class="menu-label">
                    {{ author.replaceAll("_", " ") }} via You Tube
                </p>
                <ul class="menu-list">
                    <li v-for="(src, title) in videos" :key="title">
                        <a
                            target="_blank"
                            @click="updateVideoSrc(src, title)"
                            :class="title == videoTitle && 'is-active'"
                        >
                            {{ title.replaceAll("-", " ") }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="column is-8">
            <div class="youTubeFrameWrap has-background-light">
                <iframe
                    class="youTubeFrame"
                    :src="videoSrc"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from "vue";

const props = defineProps(["videos", "author"]);

const hash = ref(window.location.href.split("#")[1]);
const videoSrc = ref(props.videos[hash.value]);
const videoTitle = hash;

const updateVideoSrc = (src, title) => {
    videoSrc.value = src;
    videoTitle.value = title;
    location.hash = videoTitle.value;
};
</script>

<style>
.youTubeFrameWrap {
    aspect-ratio: 16/9;
}
.youTubeFrame {
    width: 100%;
    height: 100%;
}
</style>
