
class TestimonialsSlider {
  constructor() {
    this.currentIndex = 0;
    this.slides = document.querySelectorAll('.testimonial-card');
    this.totalSlides = this.slides.length;
    this.sliderWrapper = document.getElementById('sliderWrapper');
    this.prevBtn = document.getElementById('prevBtn');
    this.nextBtn = document.getElementById('nextBtn');
    this.dotsContainer = document.getElementById('dotsContainer');
    this.autoPlayInterval = null;
    this.isAnimating = false;

    this.init();
    this.handleResize();
  }

  init() {
    this.updateSlidesToShow();
    this.createDots();
    this.updateSlider();
    this.bindEvents();
    this.startAutoPlay();
  }

  updateSlidesToShow() {
    const width = window.innerWidth;
    if (width >= 1024) {
      this.slidesToShow = 3;
    } else if (width >= 768) {
      this.slidesToShow = 2;
    } else {
      this.slidesToShow = 1;
    }
    this.maxIndex = this.totalSlides - this.slidesToShow;
  }

  createDots() {
    this.dotsContainer.innerHTML = '';
    for (let i = 0; i < this.totalSlides; i++) {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      if (i === 0) dot.classList.add('active');
      dot.addEventListener('click', () => this.goToSlide(i));
      this.dotsContainer.appendChild(dot);
    }
  }

  updateSlider() {
    if (this.isAnimating) return;
    const containerWidth = this.sliderWrapper.parentElement.offsetWidth;
    const cardWidth = this.slides[0].offsetWidth;
    const cardMargin = parseFloat(getComputedStyle(this.slides[0]).marginRight);
    const totalCardWidth = cardWidth + (cardMargin * 2);

    const centerOffset = (containerWidth / 2) - (cardWidth / 2);
    const translateX = centerOffset - (this.currentIndex * totalCardWidth);
    this.sliderWrapper.style.transform = `translateX(${translateX}px)`;

    this.slides.forEach((slide, index) => {
      slide.classList.toggle('center', index === this.currentIndex);
    });

    document.querySelectorAll('.dot').forEach((dot, index) => {
      dot.classList.toggle('active', index === this.currentIndex);
    });

    this.prevBtn.disabled = this.currentIndex === 0;
    this.nextBtn.disabled = this.currentIndex === this.maxIndex;

    this.isAnimating = true;
    setTimeout(() => { this.isAnimating = false; }, 600);
  }

  nextSlide() {
    if (this.isAnimating || this.currentIndex >= this.maxIndex) return;
    this.currentIndex++;
    this.updateSlider();
  }

  prevSlide() {
    if (this.isAnimating || this.currentIndex <= 0) return;
    this.currentIndex--;
    this.updateSlider();
  }

  goToSlide(index) {
    if (this.isAnimating || index === this.currentIndex) return;
    this.currentIndex = index;
    this.updateSlider();
    this.resetAutoPlay();
  }

  bindEvents() {
    this.nextBtn.addEventListener('click', () => {
      this.nextSlide();
      this.resetAutoPlay();
    });
    this.prevBtn.addEventListener('click', () => {
      this.prevSlide();
      this.resetAutoPlay();
    });

    // touch swipe
    let startX = 0;
    const slider = document.querySelector('.testimonials-slider');
    slider.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
    }, { passive: true });
    slider.addEventListener('touchend', (e) => {
      const endX = e.changedTouches[0].clientX;
      const diff = startX - endX;
      if (Math.abs(diff) > 50) {
        diff > 0 ? this.nextSlide() : this.prevSlide();
        this.resetAutoPlay();
      }
    });

    // keyboard
    document.addEventListener('keydown', (e) => {
      if (e.key === 'ArrowLeft') { this.prevSlide(); this.resetAutoPlay(); }
      else if (e.key === 'ArrowRight') { this.nextSlide(); this.resetAutoPlay(); }
    });

    const container = document.querySelector('.slider-container');
    container.addEventListener('mouseenter', () => this.pauseAutoPlay());
    container.addEventListener('mouseleave', () => this.startAutoPlay());
  }

  handleResize() {
    let resizeTimeout;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        this.updateSlidesToShow();
        this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
        this.updateSlider();
      }, 250);
    });
  }

  startAutoPlay() {
    this.pauseAutoPlay();
    this.autoPlayInterval = setInterval(() => {
      if (this.currentIndex >= this.maxIndex) {
        this.currentIndex = 0;
      } else {
        this.currentIndex++;
      }
      this.updateSlider();
    }, 5000);
  }

  pauseAutoPlay() {
    if (this.autoPlayInterval) {
      clearInterval(this.autoPlayInterval);
      this.autoPlayInterval = null;
    }
  }

  resetAutoPlay() {
    this.pauseAutoPlay();
    setTimeout(() => this.startAutoPlay(), 1000);
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new TestimonialsSlider();
});

