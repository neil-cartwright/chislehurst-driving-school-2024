document.addEventListener("DOMContentLoaded", () => {
    const loadVideos = function (f) {
        const videoLinks = document.querySelectorAll(".videos .menu-list li a");
        const youTubeFrame = document.querySelector("#youTubeFrame");
        const iframeCaption = document.querySelector("#iframe-caption");
        iframeCaption.textContent = f;
        const firstFrame = document.querySelector(
            ".menu-list li a:first-child"
        );
        youTubeFrame.src = firstFrame.href;

        const queryString = new URLSearchParams(window.location.search);
        const queryTitle = queryString.get("title");

        videoLinks.forEach(function (v) {
            let videoTitle = v.textContent.toLowerCase();
            let hash = location.hash.substr(1);
            if (videoTitle == hash || videoTitle == queryTitle) {
                youTubeFrame.src = v.href;
                v.parentElement.classList.add("is-being-viewed");
                v.parentElement.classList.add("viewed");
                const deHyphenatedText = v.textContent.replace(/-/g, " ");
                iframeCaption.textContent = deHyphenatedText;
            }
            v.addEventListener("click", function (e) {
                e.preventDefault();
                history.replaceState(
                    null,
                    null,
                    window.location.href.split("?")[0]
                );
                videoLinks.forEach(function (vl) {
                    vl.parentElement.classList.remove("is-being-viewed");
                });
                youTubeFrame.src = this.href;
                location.hash = videoTitle;
                this.parentElement.classList.add("viewed");
                this.parentElement.classList.add("is-being-viewed");
                const deHyphenatedText = v.textContent.replace(/-/g, " ");
                iframeCaption.textContent = deHyphenatedText;
            });
        });
    };

    loadVideos();
});
