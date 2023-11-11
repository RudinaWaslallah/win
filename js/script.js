var countDownDate = new Date("Dec 30, 2024 19:37:25").getTime();
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
        counter.innerHTML = "You come later ";
    }
}, 1000);

// Winner
const win = document.querySelector("#winner");
const loader = document.querySelector(".loader-con");
var myModal = new bootstrap.Modal(document.getElementById('modal'), {
    keyboard: false
});

const cards = document.querySelector("#cards");

win.addEventListener('click', function() {
    loader.style.display = 'block';
    setTimeout(function() {
        myModal.show();
    
    }, 1000);
});
