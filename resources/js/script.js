let accordions = document.querySelectorAll('.accordion');

accordions.forEach(function(accordion) {
    let buttons = accordion.querySelectorAll('.button');

    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            let activeButtons = accordion.querySelectorAll('.button.active');
            activeButtons.forEach(activeButton => {
                
                activeButton.classList.remove('active');
            });

            button.classList.add('active');
        });
    });
});
console.log('ciaone');