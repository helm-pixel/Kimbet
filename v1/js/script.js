document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelector('.sections');
    setTimeout(() => {
        sections.classList.add('visible');
    }, 500);
});

document.addEventListener('DOMContentLoaded', function() {
    const bookNowButtons = document.querySelectorAll('.book-now');
    bookNowButtons.forEach(button => {
        button.addEventListener('click', function() {
            alert('Booking functionality coming soon!');
        });
    });
});
// Removed carousel-related functionality
