class TestimonialSlider {
  constructor(selector) {
    this.slider = document.querySelector(selector);
    if (!this.slider) return;

    this.track = this.slider.querySelector('.testimonial-track');
    this.cards = Array.from(this.slider.querySelectorAll('.testimonial-card'));
    this.prevButton = this.slider.querySelector('.slider-prev');
    this.nextButton = this.slider.querySelector('.slider-next');
    this.dotsContainer = this.slider.querySelector('.slider-dots');
    
    // Initialize properties
    this.currentIndex = 0;
    this.cardWidth = 0;
    this.gap = 30;
    this.visibleCards = 1;
    this.totalCards = this.cards.length;
    this.maxIndex = 0;
    this.isAnimating = false;
    this.autoplayInterval = null;
    this.autoplayDelay = 4000;

    // Touch handling
    this.touchStartX = 0;
    this.touchEndX = 0;
    this.isDragging = false;
    this.dragThreshold = 50;

    // Resize observer for better responsiveness
    this.resizeObserver = null;

    this.init();
  }

  init() {
    // Set initial cursor style
    if (this.track) {
      this.track.style.cursor = 'grab';
    }
    
    this.calculateDimensions();
    this.createDots();
    this.bindEvents();
    this.updateSlider();
    this.startAutoplay();

    // Initial setup for smooth animations
    if (this.track) {
      this.track.style.willChange = 'transform';
    }
  }

  calculateDimensions() {
    if (!this.slider || !this.track) return;
    
    const sliderWidth = this.slider.offsetWidth;
    const computedStyle = window.getComputedStyle(this.slider);
    const sliderPadding = parseFloat(computedStyle.paddingLeft) + parseFloat(computedStyle.paddingRight);
    const availableWidth = sliderWidth - sliderPadding;

    // Responsive card sizing based on breakpoints
    if (window.innerWidth <= 480) {
      this.cardWidth = 250;
      this.gap = 20;
    } else if (window.innerWidth <= 768) {
      this.cardWidth = 280;
      this.gap = 25;
    } else if (window.innerWidth <= 1024) {
      this.cardWidth = 320;
      this.gap = 30;
    } else {
      this.cardWidth = 350;
      this.gap = 30;
    }

    // Calculate how many cards fit in viewport
    this.visibleCards = Math.floor(availableWidth / (this.cardWidth + this.gap));
    this.visibleCards = Math.max(1, Math.min(this.visibleCards, this.totalCards));

    // Update max index
    this.maxIndex = Math.max(0, this.totalCards - this.visibleCards);
    this.currentIndex = Math.min(this.currentIndex, this.maxIndex);

    // Set track width to accommodate all cards
    const trackWidth = (this.cardWidth + this.gap) * this.totalCards;
    this.track.style.width = `${trackWidth}px`;
    this.track.style.gap = `${this.gap}px`;

    // Set individual card widths
    this.cards.forEach(card => {
      card.style.flex = `0 0 ${this.cardWidth}px`;
      card.style.minWidth = `${this.cardWidth}px`;
    });
  }

  createDots() {
    if (!this.dotsContainer) return;

    this.dotsContainer.innerHTML = '';
    const dotsToShow = this.maxIndex + 1;

    for (let i = 0; i < dotsToShow; i++) {
      const dot = document.createElement('div');
      dot.classList.add('dot');
      if (i === this.currentIndex) dot.classList.add('active');
      dot.addEventListener('click', () => this.goToSlide(i));
      this.dotsContainer.appendChild(dot);
    }
  }

  bindEvents() {
    // Navigation buttons
    if (this.prevButton) {
      this.prevButton.addEventListener('click', () => this.prevSlide());
    }

    if (this.nextButton) {
      this.nextButton.addEventListener('click', () => this.nextSlide());
    }

    // Touch events
    if (this.track) {
      this.track.addEventListener('touchstart', this.handleTouchStart.bind(this), { passive: true });
      this.track.addEventListener('touchmove', this.handleTouchMove.bind(this), { passive: false });
      this.track.addEventListener('touchend', this.handleTouchEnd.bind(this));
      this.track.addEventListener('touchcancel', this.handleTouchEnd.bind(this));

      // Mouse events for desktop dragging
      this.track.addEventListener('mousedown', this.handleMouseDown.bind(this));
      document.addEventListener('mousemove', this.handleMouseMove.bind(this));
      document.addEventListener('mouseup', this.handleMouseUp.bind(this));
    }

    // Keyboard navigation
    this.slider.addEventListener('keydown', this.handleKeyDown.bind(this));
    this.slider.setAttribute('tabindex', '0');

    // Resize handling with ResizeObserver for better performance
    if (window.ResizeObserver) {
      this.resizeObserver = new ResizeObserver(() => {
        this.calculateDimensions();
        this.createDots();
        this.updateSlider();
      });
      this.resizeObserver.observe(this.slider);
    } else {
      // Fallback to traditional resize event
      let resizeTimeout;
      window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
          this.calculateDimensions();
          this.createDots();
          this.updateSlider();
        }, 250);
      });
    }

    // Pause autoplay on hover/focus
    this.slider.addEventListener('mouseenter', () => this.pauseAutoplay());
    this.slider.addEventListener('mouseleave', () => this.startAutoplay());
    this.slider.addEventListener('focusin', () => this.pauseAutoplay());
    this.slider.addEventListener('focusout', () => this.startAutoplay());

    // Pause when tab is not visible
    document.addEventListener('visibilitychange', () => {
      if (document.hidden) {
        this.pauseAutoplay();
      } else {
        this.startAutoplay();
      }
    });
  }

  handleTouchStart(e) {
    this.touchStartX = e.touches[0].clientX;
    this.isDragging = true;
    this.pauseAutoplay();
  }

  handleTouchMove(e) {
    if (!this.isDragging) return;

    const touchX = e.touches[0].clientX;
    const diffX = Math.abs(touchX - this.touchStartX);

  
    if (diffX > 10) {
      e.preventDefault();
    }
  }

  handleTouchEnd(e) {
    if (!this.isDragging) return;

    this.touchEndX = e.changedTouches[0].clientX;
    const diffX = this.touchStartX - this.touchEndX;

    if (Math.abs(diffX) > this.dragThreshold) {
      if (diffX > 0) {
        this.nextSlide();
      } else {
        this.prevSlide();
      }
    }

    this.isDragging = false;
    this.startAutoplay();
  }

  handleMouseDown(e) {
    if (e.button !== 0) return;
    
    e.preventDefault();
    this.touchStartX = e.clientX;
    this.isDragging = true;
    this.pauseAutoplay();
    
    if (this.track) {
      this.track.style.cursor = 'grabbing';
    }
  }

  handleMouseMove(e) {
    if (!this.isDragging) return;
  }

  handleMouseUp(e) {
    if (!this.isDragging) return;

    this.touchEndX = e.clientX;
    const diff = this.touchStartX - this.touchEndX;

    if (Math.abs(diff) > this.dragThreshold) {
      if (diff > 0) {
        this.nextSlide();
      } else {
        this.prevSlide();
      }
    }

    this.isDragging = false;
    this.startAutoplay();
    
    if (this.track) {
      this.track.style.cursor = 'grab';
    }
  }

  handleKeyDown(e) {
    if (e.key === 'ArrowLeft') {
      e.preventDefault();
      this.prevSlide();
    } else if (e.key === 'ArrowRight') {
      e.preventDefault();
      this.nextSlide();
    }
  }

  prevSlide() {
    if (this.isAnimating || this.maxIndex === 0) return;

    this.currentIndex = this.currentIndex === 0 ? this.maxIndex : this.currentIndex - 1;
    this.updateSlider();
  }

  nextSlide() {
    if (this.isAnimating || this.maxIndex === 0) return;

    this.currentIndex = this.currentIndex >= this.maxIndex ? 0 : this.currentIndex + 1;
    this.updateSlider();
  }

  goToSlide(index) {
    if (this.isAnimating || index === this.currentIndex || index < 0 || index > this.maxIndex) return;

    this.currentIndex = index;
    this.updateSlider();
  }

  updateSlider() {
    if (!this.track) return;
    
    this.isAnimating = true;

    // Calculate the translation
    const translateX = -(this.currentIndex * (this.cardWidth + this.gap));
    this.track.style.transform = `translateX(${translateX}px)`;

    // Update dots
    if (this.dotsContainer) {
      const dots = this.dotsContainer.querySelectorAll('.dot');
      dots.forEach((dot, index) => {
        if (index === this.currentIndex) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });
    }

    // Update accessibility
    this.updateAccessibility();

    // Reset animation flag after transition completes
    setTimeout(() => {
      this.isAnimating = false;
    }, 500);
  }

  updateAccessibility() {
    this.cards.forEach((card, index) => {
      const isVisible = index >= this.currentIndex && index < this.currentIndex + this.visibleCards;
      card.setAttribute('aria-hidden', !isVisible);
      card.setAttribute('tabindex', isVisible ? '0' : '-1');
    });

    // Update button states
    if (this.prevButton) {
      const isAtStart = this.currentIndex === 0;
      this.prevButton.disabled = isAtStart;
      this.prevButton.setAttribute('aria-disabled', isAtStart);
    }

    if (this.nextButton) {
      const isAtEnd = this.currentIndex >= this.maxIndex;
      this.nextButton.disabled = isAtEnd;
      this.nextButton.setAttribute('aria-disabled', isAtEnd);
    }
  }

  startAutoplay() {
    if (this.autoplayInterval || this.maxIndex === 0) return;

    this.autoplayInterval = setInterval(() => {
      if (!this.isDragging && !document.hidden) {
        this.nextSlide();
      }
    }, this.autoplayDelay);
  }

  pauseAutoplay() {
    if (this.autoplayInterval) {
      clearInterval(this.autoplayInterval);
      this.autoplayInterval = null;
    }
  }

  destroy() {
    this.pauseAutoplay();
    
    // Clean up event listeners
    if (this.prevButton) {
      this.prevButton.removeEventListener('click', () => this.prevSlide());
    }
    
    if (this.nextButton) {
      this.nextButton.removeEventListener('click', () => this.nextSlide());
    }
    
    if (this.track) {
      this.track.removeEventListener('touchstart', this.handleTouchStart.bind(this));
      this.track.removeEventListener('touchmove', this.handleTouchMove.bind(this));
      this.track.removeEventListener('touchend', this.handleTouchEnd.bind(this));
      this.track.removeEventListener('mousedown', this.handleMouseDown.bind(this));
    }
    
    document.removeEventListener('mousemove', this.handleMouseMove.bind(this));
    document.removeEventListener('mouseup', this.handleMouseUp.bind(this));
    
    // Clean up resize observer
    if (this.resizeObserver) {
      this.resizeObserver.disconnect();
    }
    
    // Reset styles
    if (this.track) {
      this.track.style.transform = '';
      this.track.style.cursor = '';
      this.track.style.willChange = '';
    }
  }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  // Wait a moment for images to load and layout to settle
  setTimeout(() => {
    const slider = new TestimonialSlider('.testimonial-slider');
    window.testimonialSlider = slider; // For debugging
  }, 100);
});

// Also initialize after all resources are loaded
window.addEventListener('load', () => {
  setTimeout(() => {
    if (!window.testimonialSlider) {
      const slider = new TestimonialSlider('.testimonial-slider');
      window.testimonialSlider = slider;
    }
  }, 200);
});