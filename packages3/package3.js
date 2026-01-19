function toggleDetails(button) {
    // Updated to look for the correct parent card class
    const card = button.closest('.package3--sec2--div4');
    const extra = card.querySelector('.packages2--sec3--extra-details');

    if (extra.classList.contains('show')) {
        extra.classList.remove('show');
        button.textContent = 'See More';
    } else {
        extra.classList.add('show');
        button.textContent = 'See Less';
    }
}