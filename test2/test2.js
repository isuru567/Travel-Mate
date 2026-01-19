
document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        card.addEventListener('click', function () {
            // Toggle active class
            this.classList.toggle('active');
        });

        // Optional: Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!card.contains(e.target)) {
                card.classList.remove('active');
            }
        });
    });

    // For desktop: hover instead of click
    if (window.innerWidth >= 768) {
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => card.classList.add('active'));
            card.addEventListener('mouseleave', () => card.classList.remove('active'));
        });
    }
});
