var header = document.querySelector('nav');
var black = "#ff5722e3";
window.addEventListener('scroll', function () {
    if (window.scrollY >= 100) {
        header.style.background = black;
    }
    else {
        header.style.background = "transparent";
    }
});
