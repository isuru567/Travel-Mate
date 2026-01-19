$(document).ready(function () {
  $('.owl-carousel.testamonial--sec--div5').owlCarousel({
    loop: true,
    margin: 20,
    dots: true,
    nav: true,
    navText: [
      // Prev button SVG
      `<svg class="testimonial-arrow" width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
    <circle cx="24" cy="24" r="22" class="arrow-bg"/>
    <path class="arrow-icon" d="M30 32 L18 24 L30 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>`,

      // Next button SVG
      `<svg class="testimonial-arrow" width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
    <circle cx="24" cy="24" r="22" class="arrow-bg"/>
    <path class="arrow-icon" d="M18 32 L30 24 L18 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>`
    ],
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
      0: { items: 1 },
      550: { items: 2 },
      1000: { items: 3 }
    }
  });
});