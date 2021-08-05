function toggleMobileMenu(state) {
    if(!document.querySelector('header')) return;
    document.querySelector('header').classList.toggle('mobile-menu-open', state);
}