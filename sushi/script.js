const iconMenu = document.querySelector('.sushi__header__burger-menu');
if (iconMenu){
    const menuBody = document.querySelector('.sushi__header__menu');
    iconMenu.addEventListener("click", function(e){
        document.body.classList.toggle('_lock')
        iconMenu.classList.toggle('_active');
        menuBody.classList.toggle('_active');

    })
}

