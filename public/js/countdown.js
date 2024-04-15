function startCountdown() {
    let seconds = 10;
    let countdownElement = document.getElementById('countdown');
    let countdownInterval = setInterval(function() {
        seconds--;
        countdownElement.textContent = seconds;
        if (seconds <= 0) {
            clearInterval(countdownInterval);
            window.location.href = "contacto";
        }
    }, 1000);
}

window.onload = startCountdown;
