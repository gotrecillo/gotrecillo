const toggleNavMenu = () => $('.nav-menu').toggleClass('is-active');

const NavMenu = {
    init() {
        const menuToggle = $('.nav-toggle');
        menuToggle.click(toggleNavMenu);
    }
};

export default NavMenu;
