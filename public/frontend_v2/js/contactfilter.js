document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-button");
    const branchCards = document.querySelectorAll("#branchGrid .branch-card");
    const emptyState = document.getElementById("emptyState");

    if (!filterButtons.length) return;

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const filter = button.dataset.filter;

            filterButtons.forEach((b) => {
                const isActive = b === button;
                b.classList.toggle("active", isActive);
                b.setAttribute("aria-pressed", isActive ? "true" : "false");
            });

            let visibleCount = 0;
            branchCards.forEach((card) => {
                const show = filter === "all" || card.dataset.city === filter;
                card.hidden = !show;
                if (show) visibleCount++;
            });

            if (emptyState) {
                emptyState.style.display = visibleCount ? "none" : "block";
            }
        });
    });
});
