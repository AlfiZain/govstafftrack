/**
 * Toggles the navbar visibility by adding or removing the '-translate-y-full' class.
 * It adds event listeners to the elements with IDs 'toggleOpenNavbar' and 'toggleCloseNavbar'.
 */
const toggleNavbar = () => {
    const openBar = document.getElementById("toggleOpenNavbar");
    const closeBar = document.getElementById("toggleCloseNavbar");
    const navbar = document.getElementById("navbarHRIS");

    if (openBar) {
        openBar.addEventListener("click", () => {
            navbar.classList.toggle("hidden");
            openBar.classList.toggle("hidden");
            closeBar.classList.toggle("hidden");
        });
    }

    if (closeBar) {
        closeBar.addEventListener("click", () => {
            navbar.classList.toggle("hidden");
            openBar.classList.toggle("hidden");
            closeBar.classList.toggle("hidden");
        });
    }
};

export default toggleNavbar;
