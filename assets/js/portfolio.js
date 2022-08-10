const tabsButtons = document.querySelectorAll('.tags__item');
const tabsItems = document.querySelectorAll('.projects');

tabsButtons.forEach(button => {
    button.addEventListener('click', () => {
        const number = button.getAttribute('data-tabs');
        console.log(number);
        tabsItems.forEach(tab => {
            if (tab.getAttribute('data-tabs') === number) {
                tabsItems.forEach(elem => {
                    elem.classList.remove('projects_active');
                });
                tabsButtons.forEach(elem => {
                    elem.classList.remove('projects_active');
                });
                tab.classList.add('projects_active')
            }
        });
    });
});