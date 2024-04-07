function initializeModal() {
    const contactBtns = document.querySelectorAll('.menu-item-43, .menu-item-44');
    const modalForm = document.querySelector('.modal-overlay');

    contactBtns.forEach(contactBtn => {
        contactBtn.querySelector('a').addEventListener('click', openForm);
    });

    function openForm(event) {
        event.preventDefault();
        modalForm.classList.add('active-modal');
    }

    const closeBtn = document.getElementById('modalClose');

    closeBtn.addEventListener('click', closeForm)

    function closeForm(event) {
        modalForm.classList.remove('active-modal');
    }
}