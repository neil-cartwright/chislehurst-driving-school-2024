document.addEventListener("DOMContentLoaded", () => {
    function setAttributes(el, attrs) {
        for (var key in attrs) {
            el.setAttribute(key, attrs[key]);
        }
    }

    let listItems = document.querySelectorAll(".quiz-menu li a");
    let allQuizzes = [];
    let previouslyCompleted = {};

    for (let i = 0; i < listItems.length; i++) {
        allQuizzes.push(listItems[i].getAttribute("data-quizName"));
    }

    for (let x = 0; x < localStorage.length; x++) {
        let lskey = localStorage.key(x);
        if (allQuizzes.includes(localStorage.key(x))) {
            previouslyCompleted[lskey] = localStorage.getItem(
                localStorage.key(x)
            );
        }
    }

    for (let z = 0; z < listItems.length; z++) {
        if (
            Object.keys(previouslyCompleted).includes(
                listItems[z].getAttribute("data-quizName")
            )
        ) {
            let itemScore = localStorage.getItem(
                listItems[z].getAttribute("data-quizName")
            );
            let sp = document.createElement("span");
            let oldScore = document.createTextNode(" " + itemScore);
            setAttributes(sp, {
                class: "is-size-7 is-info letter-spacing is-rounded tag ml-2 has-text-weight-bold",
            });
            sp.appendChild(oldScore);
            listItems[z].appendChild(sp);
        }
    }

    document
        .querySelector("#clear-scores")
        .addEventListener("click", function () {
            console.log(allQuizzes);
            for (let x = 0; x < localStorage.length; x++) {
                if (allQuizzes.includes(localStorage.key(x))) {
                    localStorage.removeItem(localStorage.key(x));
                    if (x == localStorage.length) {
                        location.reload();
                    }
                }
            }
        });
});
