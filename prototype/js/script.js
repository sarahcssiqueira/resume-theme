const navSlide = () => {
    const headerMenuMobile = document.querySelector('.headerMenuMobile');
    const headerMenu = document.querySelector('.headerMenu');
    const headerMenuLinks = document.querySelectorAll('.headerMenuLinks li');

    headerMenuMobile.addEventListener('click', () => {
        headerMenu.classList.toggle('headerMenuMobile-active');
    
        headerMenuLinks.forEach((link,index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
            link.style.animation = `headerMenuFade 0.5s ease forwards ${index / 7 + 0.8}s`;
            }
    });
});
}

navSlide();