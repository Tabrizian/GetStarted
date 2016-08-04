/**
 * Created by iman on 8/4/16.
 */

var time;
var count;
var currentSeconds;
var startBtn;
var startCountInterval;

function hideElements() {
    startBtn.style.display = "none";
    count.style.display = "none";
}

function showElements() {
    startBtn.style.display = "block";
    count.style.display = "block";
}

function startCount() {
    currentSeconds--;

    var sec = currentSeconds % 60;
    var minute = Math.floor(currentSeconds / 60);

    if (sec < 10)
        sec = "0" + sec;

    time.innerHTML = minute + ":" + sec;

    if (currentSeconds === 0) {
        console.log("Finished");
        clearInterval(startCountInterval);
        showElements();
    }


}

function getCountdownElements() {
    time = document.getElementById("time");
    count = document.getElementById("count");
    startBtn = document.getElementById("start");
    startBtn.onclick = function () {
        if (isNaN(count.value)) {
            console.log("Please enter a number!");
            return;
        }

        currentSeconds = count.value;
        hideElements();
        startCountInterval = setInterval(startCount, 1000);
    };
}

window.onload = function () {
    getCountdownElements();
};