document.addEventListener("DOMContentLoaded", () => {
    const msg = document.getElementById("flashMsg");
    if (msg) {
        setTimeout(() => {
            msg.style.opacity = "0";
            setTimeout(() => msg.remove(), 500);
        }, 3000);
    }
});