document.addEventListener("DOMContentLoaded", function() {
    const ratingInputs = document.querySelectorAll(".rating input");
    const ratingLabels = document.querySelectorAll(".rating label");

    ratingLabels.forEach((label, index) => {
        label.addEventListener("mouseenter", () => {
            for (let i = 0; i <= index; i++) {
                ratingLabels[i].style.color = "gold";
            }
        });

        label.addEventListener("mouseleave", () => {
            ratingLabels.forEach((label, idx) => {
                if (idx >= index) {
                    label.style.color = "gray";
                }
            });
        });

        label.addEventListener("click", () => {
            ratingInputs[index].checked = true;
            for (let i = 0; i <= index; i++) {
                ratingLabels[i].style.color = "gold";
            }
        });
    });
});
