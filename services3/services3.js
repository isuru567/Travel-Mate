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