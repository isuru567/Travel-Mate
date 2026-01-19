document.addEventListener('DOMContentLoaded', function () {
    const slides = document.querySelectorAll('.home3--sec1--div3');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev');
    const nextBtn = document.querySelector('.next');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));

        slides[index].classList.add('active');
        dots[index].classList.add('active');
        currentIndex = index;
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    }

    // Dot click navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            showSlide(index);
        });
    });

    // Arrow navigation
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);

    // Auto slide every 5 seconds
    setInterval(nextSlide, 5000);
});


//------------------------- Testamonial Slider ------------------------------------------------------- //
$(document).ready(function () {
    $('.service3--sec3--div5').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            850: { items: 3 },
            1100: { items: 4 }
        },
        navText: [
            `<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="custom-nav-arrow custom-nav-prev">
                <circle cx="12" cy="12" r="11" class="arrow-bg"/>
                <path d="M15 18L9 12L15 6" class="arrow-path" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`,
            `<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="custom-nav-arrow custom-nav-next">
                <circle cx="12" cy="12" r="11" class="arrow-bg"/>
                <path d="M9 18L15 12L9 6" class="arrow-path" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>`
        ]
    });
}); 