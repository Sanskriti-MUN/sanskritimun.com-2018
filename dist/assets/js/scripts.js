// Change color of navbar onscroll	+if(change_color){var header=document.querySelector("nav"),orange="#ffa500f7";header.style.background="transparent",window.addEventListener("scroll",function(){window.scrollY>=200?header.style.background=orange:header.style.background="transparent"})}var timer,end=new Date("04/25/2018 0:0 AM"),_second=1e3,_minute=60*_second,_hour=60*_minute,_day=24*_hour;function showRemaining(){var e=new Date,n=ende;if(n<0)return clearInterval(timer),void(document.getElementById("countdown").innerHTML="EXPIRED!");var r=Math.floor(n/_day),o=Math.floor(n%_day/_hour),t=Math.floor(n%_hour/_minute),a=Math.floor(n%_minute/_second);document.querySelector(".days p").innerHTML=r,document.querySelector(".hours p").innerHTML=o,document.querySelector(".minutes p").innerHTML=t,document.querySelector(".seconds p").innerHTML=a}timer=setInterval(showRemaining,1e3); 
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

timer = setInterval(showRemaining, 1000); 