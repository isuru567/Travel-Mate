// hero sectio

class HeroSlider {
  constructor() {
    this.slides = document.querySelectorAll('.slide');
    this.indicators = document.querySelectorAll('.indicator');
    this.progressBar = document.getElementById('progressBar');
    this.currentSlide = 0;
    this.slideInterval = 5000; // 5 seconds
    this.progressInterval = 50; // Update progress every 50ms

    this.init();
  }

  init() {
    this.startAutoSlide();
    this.startProgressBar();

    // Pause auto-slide on hover
    const slider = document.querySelector('.hero-slider');
    slider.addEventListener('mouseenter', () => this.pauseAutoSlide());
    slider.addEventListener('mouseleave', () => this.resumeAutoSlide());
  }

  goToSlide(index) {
    // Remove active class from current slide and indicator
    this.slides[this.currentSlide].classList.remove('active');
    this.indicators[this.currentSlide].classList.remove('active');

    // Update current slide index
    this.currentSlide = index;

    // Add active class to new slide and indicator
    this.slides[this.currentSlide].classList.add('active');
    this.indicators[this.currentSlide].classList.add('active');

    // Reset progress bar
    this.resetProgressBar();
  }

  nextSlide() {
    const next = (this.currentSlide + 1) % this.slides.length;
    this.goToSlide(next);
  }

  prevSlide() {
    const prev = this.currentSlide === 0 ? this.slides.length - 1 : this.currentSlide - 1;
    this.goToSlide(prev);
  }

  startAutoSlide() {
    this.autoSlideTimer = setInterval(() => {
      this.nextSlide();
    }, this.slideInterval);
  }

  pauseAutoSlide() {
    clearInterval(this.autoSlideTimer);
    clearInterval(this.progressTimer);
  }

  resumeAutoSlide() {
    this.startAutoSlide();
    this.startProgressBar();
  }

  startProgressBar() {
    let progress = 0;
    this.progressTimer = setInterval(() => {
      progress += (this.progressInterval / this.slideInterval) * 100;
      this.progressBar.style.width = progress + '%';

      if (progress >= 100) {
        progress = 0;
      }
    }, this.progressInterval);
  }

  resetProgressBar() {
    this.progressBar.style.width = '0%';
    clearInterval(this.progressTimer);
    this.startProgressBar();
  }
}

// Initialize the slider
const heroSlider = new HeroSlider();

// Global functions for button controls
function changeSlide(direction) {
  if (direction === 1) {
    heroSlider.nextSlide();
  } else {
    heroSlider.prevSlide();
  }
}

function goToSlide(index) {
  heroSlider.goToSlide(index);
}

// Keyboard navigation
document.addEventListener('keydown', (e) => {
  if (e.key === 'ArrowLeft') {
    heroSlider.prevSlide();
  } else if (e.key === 'ArrowRight') {
    heroSlider.nextSlide();
  }
});

// Touch/Swipe support
let touchStartX = 0;
let touchEndX = 0;

document.querySelector('.hero-slider').addEventListener('touchstart', (e) => {
  touchStartX = e.changedTouches[0].screenX;
});

document.querySelector('.hero-slider').addEventListener('touchend', (e) => {
  touchEndX = e.changedTouches[0].screenX;
  handleSwipe();
});

function handleSwipe() {
  const swipeThreshold = 50;
  const diff = touchStartX - touchEndX;

  if (Math.abs(diff) > swipeThreshold) {
    if (diff > 0) {
      heroSlider.nextSlide();
    } else {
      heroSlider.prevSlide();
    }
  }
}

















// slidee section 5

const swiper = new Swiper('.swiper', {
  // Default settings for mobile
  slidesPerView: 1,
  spaceBetween: 15,
  centeredSlides: true,
  loop: true,
  
  // Autoplay configuration
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
    pauseOnMouseEnter: true,
  },
  
  // Pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },
  
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  
  // Responsive breakpoints
  breakpoints: {
    500: {
      slidesPerView: 2,
      spaceBetween: 20,
      centeredSlides: false,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 25,
      centeredSlides: false,
    },
    1000: {
      slidesPerView: 4,
      spaceBetween: 30,
      centeredSlides: false,
    }
  },
  
  // Smooth transitions
  speed: 700,
  effect: 'slide',
  
  // Touch settings
  touchRatio: 1,
  touchAngle: 45,
  grabCursor: true,
  
  // Prevent card height issues
  watchSlidesProgress: true,
  watchSlidesVisibility: true,
  
  // Accessibility
  a11y: {
    enabled: true,
    prevSlideMessage: 'Previous slide',
    nextSlideMessage: 'Next slide',
  },
  
  // Keyboard control
  keyboard: {
    enabled: true,
    onlyInViewport: true,
  },
});

// Enhanced hover control
const swiperContainer = document.querySelector('.swiper');
if (swiperContainer) {
  swiperContainer.addEventListener('mouseenter', () => {
    swiper.autoplay.stop();
  });
  
  swiperContainer.addEventListener('mouseleave', () => {
    swiper.autoplay.start();
  });
}

// Ensure all slides maintain equal height
window.addEventListener('load', () => {
  swiper.update();
});








// testamonial slider

const SLIDER_CONFIG = {
  slidesPerView: {
    mobile: 1,      // < 768px
    tablet: 2,      // >= 768px
    desktop: 3      // >= 1200px
  },
  autoplayInterval: 4000, 
  autoplayEnabled: true, 
  transitionDuration: 500, 
  swipeThreshold: 50, 
  breakpoints: {
    tablet: 600,
    desktop: 1000
  }
};

// Slider implementation
class TestimonialSlider {
  constructor(sliderElement, config = SLIDER_CONFIG) {
    this.slider = sliderElement;
    this.config = config;

    // DOM elements
    this.container = this.slider.querySelector('.slider-container');
    this.wrapper = this.slider.querySelector('.slider-wrapper');
    this.cards = this.slider.querySelectorAll('.testimonial-card');
    this.prevBtn = this.slider.querySelector('.slider-arrow--prev');
    this.nextBtn = this.slider.querySelector('.slider-arrow--next');
    this.pagination = this.slider.querySelector('.slider-pagination');
    this.autoplayToggle = this.slider.querySelector('.autoplay-toggle');
    this.srAnnouncer = this.slider.querySelector('.sr-only');

    // State
    this.totalSlides = this.cards.length;
    this.currentSlidesPerView = this.getCurrentSlidesPerView();
    this.maxIndex = Math.max(0, this.totalSlides - this.currentSlidesPerView);
    this.currentIndex = 0;
    this.isDragging = false;
    this.isAutoplayEnabled = this.config.autoplayEnabled;
    this.autoplayTimer = null;

    this.init();
  }

  getCurrentSlidesPerView() {
    const width = window.innerWidth;
    if (width >= this.config.breakpoints.desktop) return this.config.slidesPerView.desktop;
    if (width >= this.config.breakpoints.tablet) return this.config.slidesPerView.tablet;
    return this.config.slidesPerView.mobile;
  }

  init() {
    this.createPagination();
    this.bindEvents();
    this.updateSlider();
    this.updateControls();
    if (this.isAutoplayEnabled) this.startAutoplay();
  }

  createPagination() {
    if (!this.pagination) return;
    this.pagination.innerHTML = '';
    for (let i = 0; i <= this.maxIndex; i++) {
      const dot = document.createElement('button');
      dot.className = 'slider-dot';
      dot.addEventListener('click', () => this.goToSlide(i));
      this.pagination.appendChild(dot);
    }
  }

  bindEvents() {
    if (this.prevBtn) this.prevBtn.addEventListener('click', () => this.prevSlide());
    if (this.nextBtn) this.nextBtn.addEventListener('click', () => this.nextSlide());
    window.addEventListener('resize', () => {
      this.currentSlidesPerView = this.getCurrentSlidesPerView();
      this.maxIndex = Math.max(0, this.totalSlides - this.currentSlidesPerView);
      this.updateSlider();
      this.updateControls();
      this.createPagination();
    });
  }

  updateSlider() {
    const offset = -(this.currentIndex * (100 / this.currentSlidesPerView));
    this.container.style.transition = `transform ${this.config.transitionDuration}ms ease`;
    this.container.style.transform = `translateX(${offset}%)`;
    this.highlightPagination();
  }

  updateControls() {
    if (this.prevBtn) this.prevBtn.disabled = this.currentIndex === 0;
    if (this.nextBtn) this.nextBtn.disabled = this.currentIndex === this.maxIndex;
  }

  highlightPagination() {
    if (!this.pagination) return;
    [...this.pagination.children].forEach((dot, i) => {
      dot.classList.toggle('active', i === this.currentIndex);
    });
  }

  prevSlide() {
    if (this.currentIndex > 0) {
      this.currentIndex--;
      this.updateSlider();
      this.updateControls();
    }
  }

  nextSlide() {
    if (this.currentIndex < this.maxIndex) {
      this.currentIndex++;
      this.updateSlider();
      this.updateControls();
    }
  }

  goToSlide(index) {
    this.currentIndex = index;
    this.updateSlider();
    this.updateControls();
  }

  startAutoplay() {
    this.stopAutoplay();
    this.autoplayTimer = setInterval(() => {
      if (this.currentIndex < this.maxIndex) this.nextSlide();
      else this.goToSlide(0);
    }, this.config.autoplayInterval);
  }

  stopAutoplay() {
    if (this.autoplayTimer) {
      clearInterval(this.autoplayTimer);
      this.autoplayTimer = null;
    }
  }
}

document.addEventListener('DOMContentLoaded', function() {
  const sliderEl = document.querySelector('.testimonial-slider');
  if (sliderEl) {
    new TestimonialSlider(sliderEl);
  }
});


