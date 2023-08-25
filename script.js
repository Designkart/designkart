const animationContainer = document.querySelector('.wrap-animation');
const words = ['Design', 'Branding', 'UX'];
let currentIndex = 0;

function animateText() {
    animationContainer.innerHTML = words[currentIndex];
    currentIndex = (currentIndex + 1) % words.length;
}

function startAnimation() {
    setInterval(animateText, 3000); // Switch words every 3 seconds
}

startAnimation();
