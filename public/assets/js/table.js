
let slides = document.querySelectorAll(".slide"),
btns = document.querySelectorAll(".btn"),
currentSlide = 1;

// javascript for image slider manual navigation

const manualNan = function (manual) {
    slides.forEach((slide) => {
        slide.classList.remove("active");

        btns.forEach((btn) => {
            btn.classList.remove("active");
        });
    });

    slides[manual].classList.add("active");
    btns[manual].classList.add("active");
};

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        console.log(slides);
        manualNan(i);
        currentSlide = i;
    });
});

//javascript for image slider autoplay navigation
const repeat = function (activeClass) {
    let active = document.getElementsByClassName("active");
    let i = 1;

    let repeater = () => {
        setTimeout(function () {
            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove("active");
            });

            slides[i].classList.add("active");
            btns[i].classList.add("active");
            i++;

            if (slides.length == i) {
                i = 0;
            }

            if (i >= slides.length) {
                return;
            }

            repeater();
        }, 10000);
    };
};
repeat();
