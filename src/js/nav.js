window.addEventListener('scroll', function () {
    const header = document.querySelector('nav.navbar');
    const windowPosition = window.scrollY > 0;

    header.classList.toggle('scrollingActive', windowPosition);
});