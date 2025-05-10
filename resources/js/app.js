import "./bootstrap";
import "./navbar";

import { createApp } from "vue";

import "animate.css";

import PairsComponent from "./components/PairsComponent.vue";
import RecommendationsComponent from "./components/RecommendationsComponent.vue";
import PostcodeComponent from "./components/PostcodeComponent.vue";
import TestPassComponent from "./components/TestPassComponent.vue";
import TipOfTheDay from "./components/TipOfTheDay.vue";
import ParkingComponent from "./components/ParkingComponent.vue";
import SignsComponent from "./components/SignsComponent.vue";
import ModulesComponent from "./components/ModulesComponent.vue";
import QuizComponent from "./components/QuizComponent.vue";
import LessonComponent from "./components/LessonComponent.vue";
import CreateLessonForm from "./components/CreateLessonForm.vue";
import UpdateLessonForm from "./components/UpdateLessonForm.vue";
import NotesModal from "./components/NotesModal.vue";
import CustomerSearch from "./components/CustomerSearch.vue";
import FindLessons from "./components/FindLessons.vue";
import AddLessonNote from "./components/AddLessonNote.vue";
import CostSelect from "./components/CostSelect.vue";
import FindCosts from "./components/FindCosts.vue";
import ArchiveCustomer from "./components/ArchiveCustomer.vue";
import NotificationComponent from "./components/NotificationComponent.vue";
import FlashCard from "./components/FlashCard.vue";
import VideoComponent from "./components/VideoComponent.vue";
import HomeworkForm from "./components/HomeworkForm.vue";
import FrameworkCarousel from "./components/FrameworkCarousel.vue";
import CookieConsent from "./components/CookieConsent.vue";
import SearchNotes from "./components/SearchNotes.vue";
import HighlightedText from "./components/HighlightedText.vue";
import VideoModal from "./components/VideoModal.vue";
import AddTestDate from "./components/AddTestDate.vue";
// routes app
// import SidcupRoundaboutsTabs from "./components/routes-app/SidcupRoundaboutsTabs.vue";

createApp({})
    .component("PairsComponent", PairsComponent)
    .component("RecommendationsComponent", RecommendationsComponent)
    .component("PostcodeComponent", PostcodeComponent)
    .component("TestPassComponent", TestPassComponent)
    .component("TipOfTheDay", TipOfTheDay)
    .component("ParkingComponent", ParkingComponent)
    .component("SignsComponent", SignsComponent)
    .component("ModulesComponent", ModulesComponent)
    .component("QuizComponent", QuizComponent)
    .component("LessonComponent", LessonComponent)
    .component("CreateLessonForm", CreateLessonForm)
    .component("UpdateLessonForm", UpdateLessonForm)
    .component("NotesModal", NotesModal)
    .component("CustomerSearch", CustomerSearch)
    .component("FindLessons", FindLessons)
    .component("AddLessonNote", AddLessonNote)
    .component("CostSelect", CostSelect)
    .component("FindCosts", FindCosts)
    .component("ArchiveCustomer", ArchiveCustomer)
    .component("NotificationComponent", NotificationComponent)
    .component("FlashCard", FlashCard)
    .component("VideoComponent", VideoComponent)
    .component("HomeworkForm", HomeworkForm)
    .component("FrameworkCarousel", FrameworkCarousel)
    .component("CookieConsent", CookieConsent)
    .component("SearchNotes", SearchNotes)
    .component("HighlightedText", HighlightedText)
    // .component("SidcupRoundaboutsTabs", SidcupRoundaboutsTabs)
    .component("VideoModal", VideoModal)
    .component("AddTestDate", AddTestDate)
    .mount("#app");

import { selectElementContents } from "./helpers";

var el = document.getElementById("selected-el");
if (el) {
    el.addEventListener("click", () => {
        selectElementContents(el);
    });
}
