document.addEventListener("DOMContentLoaded", () => {
    const openBar = document.getElementById("toggleOpenSidebar");
    const closeBar = document.getElementById("toggleCloseSidebar");
    const sidebar = document.getElementById("sidebarHRIS");

    openBar.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });

    closeBar.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
    });
});
