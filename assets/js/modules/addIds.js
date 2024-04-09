// Add IDs to #linked elements

function initializeAddIds() {
    const skillsElement = document.querySelector('.skills');
    const projectsElement = document.querySelector('.projects')
    if (skillsElement, projectsElement) {
        skillsElement.setAttribute('id', 'skills');
        projectsElement.setAttribute('id', 'projects')
    }
};