/**
 * Toggles the sidebar visibility by adding or removing the '-translate-x-full' class.
 * It adds event listeners to the elements with IDs 'toggleOpenSidebar' and 'toggleCloseSidebar'.
 */
const toggleSidebar = () => {
    const openBar = document.getElementById("toggleOpenSidebar");
    const closeBar = document.getElementById("toggleCloseSidebar");
    const sidebar = document.getElementById("sidebarHRIS");

    if (openBar) {
        openBar.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });
    }

    if (closeBar) {
        closeBar.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
        });
    }
};

export default toggleSidebar;
