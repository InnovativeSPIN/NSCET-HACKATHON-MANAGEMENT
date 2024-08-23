document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.slider');
    const leftBtn = document.querySelector('.left-btn');
    const rightBtn = document.querySelector('.right-btn');
    const backToTopBtn = document.querySelector('.back-to-top');
    const slides = document.querySelectorAll('.slider-item');
    const slideWidth = slides[0].offsetWidth + 30; // width of slider-item + margin-right
    const totalSlides = slides.length;

    let scrollAmount = 0;
    let currentIndex = 0;

    function updateSlider() {
        slider.scrollTo({
            left: scrollAmount,
            behavior: 'smooth'
        });
    }

    function scrollToSlide(index) {
        if (index < 0) {
            // Go to the last slide
            slider.scrollTo({
                left: (totalSlides - 2) * slideWidth,
                behavior: 'smooth'
            });
            setTimeout(() => {
                scrollAmount = (totalSlides - 2) * slideWidth;
                currentIndex = totalSlides - 2;
                updateSlider();
            }, 500); // Time to wait for smooth transition
        } else if (index >= totalSlides - 1) {
            // Go to the first slide
            slider.scrollTo({
                left: slideWidth,
                behavior: 'smooth'
            });
            setTimeout(() => {
                scrollAmount = slideWidth;
                currentIndex = 1;
                updateSlider();
            }, 500); // Time to wait for smooth transition
        } else {
            scrollAmount = index * slideWidth;
            updateSlider();
            currentIndex = index;
        }
    }

    leftBtn.addEventListener('click', () => {
        scrollToSlide(currentIndex - 1);
    });

    rightBtn.addEventListener('click', () => {
        scrollToSlide(currentIndex + 1);
    });

    // Initialize slider to first slide
    scrollToSlide(currentIndex);

    // Back to Top Button
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

    // Loader
    function hideLoader() {
        setTimeout(() => {
            const spinner = document.getElementById('spinner');
            if (spinner) {
                spinner.classList.remove('show');
            }
        }, 1);
    }
    hideLoader();
});
