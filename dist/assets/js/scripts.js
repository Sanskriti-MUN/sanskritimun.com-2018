var header = document.querySelector('nav');
var orange = "#ffa500f7";
window.addEventListener('scroll', function () {
    if (window.scrollY >= 200) {
        header.style.background = orange;
    }
    else {
        header.style.background = "transparent";
    }
});

var countTo = new Date('apr, 25, 2018, 20:54:00');
var difference = (now - countTo);
var days = Math.floor(difference/(86400000)*1);
var hours = Math.floor((difference%(86400000))/(3600000)*1);
var mins = Math.floor(((difference%(86400000))%(3600000))/(60000)*1);
var secs = Math.floor((((difference%(86400000))%(3600000))%(60000))/1000*1);
document.querySelector('.days p').innerHTML = days;
document.querySelector('.hours p').innerHTML = hours;
document.querySelector('.minutes p').innerHTML = mins;
document.querySelector('.seconds p').innerHTML = secs;
clearTimeout(upTime.to);
upTime.to = setTimeout(function () {
	var today = new Date();
	now = today.getDate();
	upTime(countTo);
}, 1000);