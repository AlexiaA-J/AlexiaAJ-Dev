function initializeMenuToggle() {
    let menuToggle = document.querySelector(".menuToggle");
    let headerNavMobile = document.querySelector(".header__navMobile");
    let bars = document.querySelectorAll('.bar');
    if (menuToggle) {
        menuToggle.addEventListener("click", function() {
            headerNavMobile.classList.toggle("active");
            Array.from(bars).forEach(bar => bar.classList.toggle('active-menu'));
        });
    }
}