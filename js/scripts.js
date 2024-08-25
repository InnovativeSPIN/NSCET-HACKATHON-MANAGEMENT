document.addEventListener('DOMContentLoaded', () => {
    const backToTopBtn = document.querySelector('.back-to-top');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            backToTopBtn.style.display = 'block';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });

    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
