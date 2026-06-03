document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("menu-toggle");
    const menu = document.getElementById("mobile-menu");

    button.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
});