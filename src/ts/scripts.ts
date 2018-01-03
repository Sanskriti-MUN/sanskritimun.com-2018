let header: Node = document.querySelector('nav');
let black: String = "#ff5722e3";

window.addEventListener('scroll', function() {
    if (window.scrollY >= 100) {
        header.style.background = black;
    } else {
        header.style.background = "transparent";
    }
});