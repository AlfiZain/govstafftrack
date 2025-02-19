const blurBackground = () => {
    const navbar = document.getElementById("navbar");
    window.addEventListener("scroll", () => {
        if (window.scrollY > 30) {
            navbar.classList.add("backdrop-blur-md", "shadow-md");
        } else {
            navbar.classList.remove("backdrop-blur-md", "shadow-md");
        }
    });
};

export default blurBackground;
