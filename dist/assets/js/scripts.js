// Change color of navbar onscroll
if (change_color) {
    var header = document.querySelector('nav');
    var orange = "#ffa500f7";
    header.style.background = "transparent";
    window.addEventListener('scroll', function () {
            if (window.scrollY >= 200) {
                    header.style.background = orange;
            }
            else {
                    header.style.background = "transparent";
            }
    });
}

    
    
// Countdown	
/*
var end = new Date('04/25/2018 9:0 AM');
var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
    var now = new Date();
    var interval = end - now;
    if (interval < 0) {
    
        clearInterval(timer);
        return;
    
    }
    var days = Math.floor(interval / _day);
    var hours = Math.floor((interval % _day) / _hour);
    var minutes = Math.floor((interval % _hour) / _minute);
    var seconds = Math.floor((interval % _minute) / _second);

    document.querySelector('.days p').innerHTML = days;
    document.querySelector('.hours p').innerHTML = hours;
    document.querySelector('.minutes p').innerHTML = minutes;
    document.querySelector('.seconds p').innerHTML = seconds;
}

timer = setInterval(showRemaining, 1000); */