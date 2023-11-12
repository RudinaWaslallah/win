
document.addEventListener('DOMContentLoaded', function () {
    var winnerButton = document.getElementById('winner');

    // Function to show the winner button
    function showWinnerButton() {
        winnerButton.style.display = 'block';
    }
var countDownDate = new Date(" Dec 30, 2023 5:7:10").getTime();
var x = setInterval(function() {
    var counter = document.querySelector("#countdown");
    var now = new Date().getTime();

    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    counter.innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

    if (distance < 0) {
        clearInterval(x);
        counter.innerHTML = "Time's up!";
        counter.innerHTML = "You come later ";
        showWinnerButton();
    }
}, 1000);

// Click event listener for the winner button
winnerButton.addEventListener('click', function () {
    selectWinner();
});

});




