// Função menu hamburguer mobile

document.addEventListener("DOMContentLoaded", function () {
    const mobileLinks = document.querySelectorAll(".nav-link-mobile");
    const toggleButton = document.querySelector(
        '[data-collapse-toggle="navbar-sticky"]'
    );
    const navbar = document.getElementById("navbar-sticky");

    mobileLinks.forEach((link) => {
        link.addEventListener("click", () => {
            if (window.innerWidth < 768) {
                const isExpanded =
                    toggleButton.getAttribute("aria-expanded") === "true";

                if (isExpanded && toggleButton) {
                    toggleButton.click();
                }
            }
        });
    });
});
