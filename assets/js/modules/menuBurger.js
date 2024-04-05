// Allow open/close on Burger Menu

function initializeMenuToggle() {
    let menuToggle = document.querySelector(".menuToggle");
    let headerNavMobile = document.querySelector(".header__navMobile");
    let header = document.querySelector(".header");
    let mainContent = document.querySelector(".mainContent");
    let bars = document.querySelectorAll('.bar');

    if (menuToggle) {
        menuToggle.addEventListener("click", function() {
            toggleMenu();
        });

        // Function to toggle menu and links
        function toggleMenu() {
            headerNavMobile.classList.toggle("active");
            header.classList.toggle("fixed");
            mainContent.classList.toggle("active-wrapper");
            Array.from(bars).forEach(bar => bar.classList.toggle('active-menu'));
        }

        // Add event listener to each menu link to close the menu when clicked
        let menuLinks = document.querySelectorAll('.header__navMobile .menu-item a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (headerNavMobile.classList.contains("active")) {
                    toggleMenu();
                }
            });
        });
    }
}