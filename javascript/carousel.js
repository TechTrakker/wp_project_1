document.addEventListener('DOMContentLoaded', function() {
    let index = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    function showSlide(n) {
        if (n >= totalSlides) index = 0;
        else if (n < 0) index = totalSlides - 1;
        else index = n;

        const newTransform = `translateX(-${index * 100}%)`;
        document.querySelector('.carousel-slides').style.transform = newTransform;
    }

    document.querySelector('.carousel-prev').addEventListener('click', function() {
        showSlide(index - 1);
    });

    document.querySelector('.carousel-next').addEventListener('click', function() {
        showSlide(index + 1);
    });

    showSlide(index);
});
