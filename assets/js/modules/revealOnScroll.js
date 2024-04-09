function initializeRevealOnScroll () {
    // Check where the element is on the screen
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Handle scroll event
    function revealOnScroll() {
        const revealElements = document.querySelectorAll('.reveal');
        let allRevealed = true;
        
        revealElements.forEach(element => {
            if (!element.classList.contains('active') && isInViewport(element)) {
                element.classList.add('active');
            }
            if (!element.classList.contains('active')) {
                allRevealed = false;
            }
        });

        if (allRevealed) {
            window.removeEventListener('scroll', revealOnScroll);
        }
    }

    window.addEventListener('scroll', revealOnScroll);

    revealOnScroll();
}