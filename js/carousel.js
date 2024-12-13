const images = document.querySelector('.carousel-images');
const items = document.querySelectorAll('.carousel-item');
const prev = document.getElementById('prev');
const next = document.getElementById('next');

let index = 0;

function showSlide(newIndex) {
    if (newIndex < 0) {
        index = items.length - 1;
    } else if (newIndex >= items.length) {
        index = 0;
    } else {
        index = newIndex;
    }
    images.style.transform = `translateX(-${index * 100}%)`;
}

prev.addEventListener('click', () => showSlide(index - 1));
next.addEventListener('click', () => showSlide(index + 1));
