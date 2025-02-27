document.addEventListener("DOMContentLoaded", function () {
    const toggleLinks = document.querySelectorAll(".toggle-link");

    toggleLinks.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();
            window.location.href = this.getAttribute("href");
        });
    });
});
