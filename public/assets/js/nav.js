document.addEventListener("DOMContentLoaded", function() {
    console.log("Script executed");

    let prevScrollPos = window.scrollY || document.documentElement.scrollTop;
    const navElement = document.querySelector("header");
    console.log(navElement);

    window.addEventListener('scroll', function() {
        const currentScrollPos = window.scrollY || document.documentElement.scrollTop;

        if (prevScrollPos > currentScrollPos) {
            //scroll hacia arriba
            navElement.style.top = "0";
            console.log("Scrolling up");
        } else {
            //scroll hacia abajo
            navElement.style.top = "-115px";
            console.log("Scrolling down");
        }

        prevScrollPos = currentScrollPos;
    });
});