// JavaScript to handle slide carousel functionality
const carouselSlides = document.querySelectorAll('.carousel-slide');

carouselSlides.forEach((carouselSlide) => {
  const carouselItems = carouselSlide.querySelectorAll('.carousel-item');
  const itemWidth = carouselItems[0].clientWidth + 10; // Width + margin

  let slideCounter = 0;

  function moveSlide() {
    carouselSlide.style.transform = `translateX(-${itemWidth * slideCounter}px)`;
  }

  function slideNext() {
    slideCounter++;
    if (slideCounter > carouselItems.length - 4) {
      slideCounter = 0;
    }

    moveSlide();
  }

  setInterval(slideNext, 3000); // Automatically slide every 3 seconds
});
