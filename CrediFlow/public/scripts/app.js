// Inclure le composant menu
document.addEventListener('DOMContentLoaded', () => {
    const menuContainer = document.createElement('div');
    menuContainer.id = 'menu-component';
    document.body.prepend(menuContainer);

    fetch('components/menu.html')
        .then(response => response.text())
        .then(data => {
            menuContainer.innerHTML = data;
            console.log('Menu loaded successfully');
        })
        .catch(error => console.error('Error loading menu:', error));
});
