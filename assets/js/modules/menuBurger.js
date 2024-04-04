function initializeMenuToggle() {
    let menuToggle = document.querySelector(".menuToggle");
    let header = document.querySelector(".header");
    let headerNavMobile = document.querySelector(".header__navMobile");
    let bars = document.querySelectorAll('.bar');
    if (menuToggle) {
        menuToggle.addEventListener("click", function() {
            headerNavMobile.classList.toggle("active");
            header.classList.toggle("fixed");
            Array.from(bars).forEach(bar => bar.classList.toggle('active-menu'));
        });
    }
}