import toggleNavbar from "./toggleNavbar";
import toggleSidebar from "./toggleSidebar";
import blurBackground from "./blurBackground";

document.addEventListener("DOMContentLoaded", () => {
    const toggleOpenSidebar = document.getElementById("toggleOpenSidebar");
    const toggleOpenNavbar = document.getElementById("toggleOpenNavbar");
    const navbar = document.getElementById("navbar");
    if (toggleOpenSidebar) {
        toggleSidebar();
    }
    if (toggleOpenNavbar) {
        toggleNavbar();
    }
    if (navbar) {
        blurBackground();
    }
});
