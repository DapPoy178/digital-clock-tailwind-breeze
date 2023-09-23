import './bootstrap';

const currentTime = document.querySelector("h2");
setInterval(() => {
    let date = new Date(),
        h = date.getHours(),
        m = date.getMinutes(),
        s = date.getSeconds();

    h = h == 0 ? h = 12 : h;
    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    let ctime = `${h} : ${m} : ${s}`;
    currentTime.innerText = ctime;

});

// checking if ctime == prayer time
$(document).ready(function () {
    setInterval(function () {
        $('#myDiv').load('#myDiv');
    }, 1000);
});

// prayer time countdown
var alarmHours = 5;
var alarmMinutes = 0;

// Calculate the alarm time in milliseconds
var alarmTime = new Date().getTime() + (alarmHours * 60 * 60 * 1000) + (alarmMinutes * 60 * 1000);

// Update the count down every 1 second
var x = setInterval(function () {

    // Get the current time
    var now = new Date().getTime();

    // Find the distance between now and the alarm time
    var distance = alarmTime - now;

    // Time calculations for hours, minutes, and seconds
    var h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var s = Math.floor((distance % (1000 * 60)) / 1000);

    h = h == 0 ? h = 12 : h;
    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;

    // Output the result in an element with id="alarm-clock"
    document.getElementById("timer").innerHTML = `${h} : ${m} : ${s}`;

    // If the alarm time has been reached, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("alarm-clock").innerHTML = "ALARM!";
    }
}, 1000);

