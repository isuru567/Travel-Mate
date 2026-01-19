class HeroSlider {
    constructor() {
        // Get slider elements
        this.slider = document.getElementById('heroSlider');
        this.slides = this.slider.querySelectorAll('.home2--sec1--div1');
        this.indicators = this.slider.querySelectorAll('.indicator');
        this.prevBtn = document.getElementById('prevBtn');
        this.nextBtn = document.getElementById('nextBtn');

        // Slider state
        this.currentSlide = 0;
        this.totalSlides = this.slides.length;
        this.autoSlideInterval = null;
        this.isAutoSliding = true;

        // Configuration
        this.autoSlideDelay = 5000; // 5 seconds

        // Initialize slider
        this.init();
    }

    /**
     * Initialize the slider with event listeners and auto-slide
     */
    init() {
        // Add event listeners for navigation buttons
        this.prevBtn.addEventListener('click', () => this.previousSlide());
        this.nextBtn.addEventListener('click', () => this.nextSlide());

        // Add event listeners for indicators
        this.indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => this.goToSlide(index));
        });

        // Add keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') this.previousSlide();
            if (e.key === 'ArrowRight') this.nextSlide();
        });

        // Pause auto-slide on hover (desktop only)
        this.slider.addEventListener('mouseenter', () => {
            if (window.innerWidth >= 768) {
                this.pauseAutoSlide();
            }
        });

        this.slider.addEventListener('mouseleave', () => {
            if (window.innerWidth >= 768) {
                this.resumeAutoSlide();
            }
        });

        // Handle touch events for mobile swipe
        this.addTouchSupport();

        // Start auto-slide
        this.startAutoSlide();
    }

    /**
     * Go to specific slide
     * @param {number} slideIndex - Index of the slide to show
     */
    goToSlide(slideIndex) {
        // Remove active class from current slide and indicator
        this.slides[this.currentSlide].classList.remove('active');
        this.indicators[this.currentSlide].classList.remove('active');

        // Update current slide index
        this.currentSlide = slideIndex;

        // Add active class to new slide and indicator
        this.slides[this.currentSlide].classList.add('active');
        this.indicators[this.currentSlide].classList.add('active');
    }

    /**
     * Go to next slide
     */
    nextSlide() {
        const nextIndex = (this.currentSlide + 1) % this.totalSlides;
        this.goToSlide(nextIndex);
    }

    /**
     * Go to previous slide
     */
    previousSlide() {
        const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.goToSlide(prevIndex);
    }

    /**
     * Start automatic sliding
     */
    startAutoSlide() {
        this.autoSlideInterval = setInterval(() => {
            this.nextSlide();
        }, this.autoSlideDelay);
        this.isAutoSliding = true;
    }

    /**
     * Pause automatic sliding
     */
    pauseAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.isAutoSliding = false;
        }
    }

    /**
     * Resume automatic sliding
     */
    resumeAutoSlide() {
        if (!this.isAutoSliding) {
            this.startAutoSlide();
        }
    }

    /**
     * Add touch/swipe support for mobile devices
     */
    addTouchSupport() {
        let startX = 0;
        let endX = 0;
        const minSwipeDistance = 50;

        this.slider.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        this.slider.addEventListener('touchmove', (e) => {
            // Prevent scrolling during swipe
            e.preventDefault();
        });

        this.slider.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            const swipeDistance = Math.abs(endX - startX);

            if (swipeDistance > minSwipeDistance) {
                if (endX < startX) {
                    // Swipe left - next slide
                    this.nextSlide();
                } else {
                    // Swipe right - previous slide
                    this.previousSlide();
                }
            }
        });
    }
}

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new HeroSlider();
});

// Handle window resize to manage auto-slide behavior
window.addEventListener('resize', () => {
    // Logic can be added here if needed for responsive behavior
});






// =============================================================== section 4 ======================================================== // 

// read more option


document.addEventListener("DOMContentLoaded", () => {
    const buttons = document.querySelectorAll(".read-more-btn");
    buttons.forEach(btn => {
        btn.addEventListener("click", () => {
            const text = btn.previousElementSibling;
            text.classList.toggle("expanded");
            btn.textContent = text.classList.contains("expanded") ? "Read less" : "Read more";
        });
    });
});


// =============================================================== section 7 ======================================================== //


document.addEventListener('DOMContentLoaded', () => {
    // Initialize Swiper with corrected settings
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        centeredSlides: false, // Don't center slides
        loop: true,
        effect: 'slide',
        speed: 600,
        grabCursor: true,
        keyboard: { enabled: true },
        mousewheel: { invert: false },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            // Mobile
            0: {
                slidesPerView: 1,
                spaceBetween: 15,
                centeredSlides: false
            },
            // Tablet
            640: {
                slidesPerView: 2,
                spaceBetween: 25,
                centeredSlides: false
            },
            // Desktop
            1024: {
                slidesPerView: 2,
                spaceBetween: 30,
                centeredSlides: false
            },
            // Large Desktop
            1200: {
                slidesPerView: 2,
                spaceBetween: 30,
                centeredSlides: false
            },
        }
    });

    // Enhanced hover effect on cards
    const cards = document.querySelectorAll('.home2--sec7--div7');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function () {
            this.style.transform = 'translateY(-8px) scale(1.02)';
            this.style.boxShadow = '0 15px 40px rgba(0, 0, 0, 0.15)';
        });
        card.addEventListener('mouseleave', function () {
            this.style.transform = 'translateY(0) scale(1)';
            this.style.boxShadow = '0 4px 15px rgba(0, 0, 0, 0.08)';
        });
    });
});


// =============================================================== End section 7 ======================================================== //




// ===============================================================  section 8 ======================================================== //

const faqs = document.querySelectorAll(".home2--sec8--div6");
faqs.forEach((faq) => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    });
});

// =============================================================== End section 8 ======================================================== //



$(document).ready(function(){
    function initCarousel() {
        if ($(window).width() < 768) {
            if (!$('.home2--sec5--div5').hasClass('owl-loaded')) {
                $('.home2--sec5--div5').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: true,
                    dots: true,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    navText: ['<span>&#8249;</span>', '<span>&#8250;</span>']
                });
            }
        } else {
            if ($('.home2--sec5--div5').hasClass('owl-loaded')) {
                $('.home2--sec5--div5').trigger('destroy.owl.carousel');
                $('.home2--sec5--div5').removeClass('owl-loaded owl-carousel owl-theme');
                $('.home2--sec5--div5').addClass('owl-carousel owl-theme');
            }
        }
    }

    initCarousel();
    
    $(window).resize(function(){
        initCarousel();
    });
});


