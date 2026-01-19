$(document).ready(function () {
  $(".package--sec4--div5").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    smartSpeed: 600,
    navText: [
      `<svg class="slider-arrow" width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
    <circle class="arrow-bg" cx="24" cy="24" r="22"/>
    <path class="arrow-icon" d="M30 32 L18 24 L30 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>`,

      `<svg class="slider-arrow" width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
    <circle class="arrow-bg" cx="24" cy="24" r="22"/>
    <path class="arrow-icon" d="M18 32 L30 24 L18 16" fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>`
    ],
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    responsive: {
      0: {
        items: 1,
        stagePadding: 10,
        nav: true,
        dots: true,
        margin: 10
      },
      480: {
        items: 1,
        stagePadding: 20,
        nav: true,
        dots: true,
        margin: 15
      },
      550: {
        items: 2,
        stagePadding: 0,
        nav: true,
        dots: true,
        margin: 20
      },
      1000: {
        items: 3,
        nav: true,
        dots: false,
        margin: 25
      },
      1200: {
        items: 4,
        nav: true,
        dots: false,
        margin: 30
      }
    }
  });
});