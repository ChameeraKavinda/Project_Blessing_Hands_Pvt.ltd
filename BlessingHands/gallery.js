

//scrollReveal Option JS code
const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
};

// Initialize ScrollReveal
const sr = ScrollReveal();







//Image Page container
sr.reveal(".image_card", {
    ...scrollRevealOption,
    interval: 1000, 
    distance: '50px', 
    origin: 'bottom', 
    opacity: 0, 
    easing: 'ease-in-out', 
    scale: 0.85, 
});
document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".image_card img");

    images.forEach(image => {
        image.addEventListener("mouseenter", () => {
            images.forEach(img => {
                if (img !== image) {
                    img.style.filter = "blur(5px)";
                }
            });
        });

        image.addEventListener("mouseleave", () => {
            images.forEach(img => {
                img.style.filter = "none";
            });
        });
    });
});
