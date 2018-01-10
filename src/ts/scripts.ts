let header: String = <HTMLElement>document.querySelector('nav');
let orange: String = "#ffa500f7";

window.addEventListener('scroll', function() {
	if (window.scrollY >= 200) {
		header.style.background = orange;
	} else {
		header.style.background = "transparent";
	}
});