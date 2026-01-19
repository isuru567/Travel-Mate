function toggleDetails(button) {
    const card = button.closest('.packages2--sec3--div4');
    const extra = card.querySelector('.packages2--sec3--extra-details');

    if (extra.classList.contains('show')) {
        extra.classList.remove('show');
        button.textContent = 'See More';
    } else {
        extra.classList.add('show');
        button.textContent = 'See Less';
    }
}