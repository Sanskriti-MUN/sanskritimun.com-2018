var header = document.querySelector('nav');
var orange = "#ffa500f7";
window.addEventListener('scroll', function () {
    if (window.scrollY >= 100) {
        header.style.background = orange;
    }
    else {
        header.style.background = "transparent";
    }
});
