import toggleNavbar from "./toggleNavbar";
import toggleSidebar from "./toggleSidebar";

document.addEventListener("DOMContentLoaded", () => {
    const toggleOpenSidebar = document.getElementById("toggleOpenSidebar");
    const toggleOpenNavbar = document.getElementById("toggleOpenNavbar");
    if (toggleOpenSidebar) {
        toggleSidebar();
    }
    if (toggleOpenNavbar) {
        toggleNavbar();
    }
});
