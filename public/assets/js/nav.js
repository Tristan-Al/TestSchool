document.addEventListener("DOMContentLoaded", function () {
    let prevScrollPos = window.scrollY || document.documentElement.scrollTop;
    const navElement = document.querySelector("header");

    window.addEventListener('scroll', function () {
        const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

        if (prevScrollPos > currentScrollPos) {
            // Scroll up
            navElement.style.top = "0";
        } else {
            // Scroll down
            navElement.style.top = "-115px";
        }

        prevScrollPos = currentScrollPos;
    });
});