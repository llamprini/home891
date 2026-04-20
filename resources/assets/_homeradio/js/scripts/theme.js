
const toggleButton = document.querySelector(".theme-button");
const html = document.documentElement;
const savedTheme = localStorage.getItem("theme");
const initialTheme = savedTheme ? savedTheme : "dark";

html.setAttribute("data-theme", initialTheme);

toggleButton.addEventListener("click", () => {
    const currentTheme = html.getAttribute("data-theme");
    const newTheme = currentTheme === "dark" ? "light" : "dark";

    html.setAttribute("data-theme", newTheme);
    localStorage.setItem("theme", newTheme); // Αποθήκευσε το νέο theme
});


//volume
const volumeBars = document.querySelectorAll('.volume-bar');

function updateVolumeBarStyle(bar) {
    const value = parseFloat(bar.value);
    const percentage = value * 100;
    bar.style.background = `linear-gradient(to right, #918376 ${percentage}%, #4A4642 ${percentage}%)`;
}

// Για κάθε volume bar
volumeBars.forEach(bar => {
    // Πρόσθεσε event listener
    bar.addEventListener('input', () => updateVolumeBarStyle(bar));
    // Κάλεσέ το μία φορά στην αρχή
    updateVolumeBarStyle(bar);
});








function initHeaderColorTriggers() {
    const header = document.querySelector('header');
    if (!header) return;


    //   ScrollTrigger.getAll().forEach(t => t.kill());

    document.querySelectorAll('.dark-bg').forEach(section => {
        ScrollTrigger.create({
            trigger: section,
            start: () => `top ${header.offsetHeight}px`,
            end: () => `bottom ${header.offsetHeight}px`,

            onEnter: () => header.classList.add('change-color'),
            onLeave: () => header.classList.remove('change-color'),
            onEnterBack: () => header.classList.add('change-color'),
            onLeaveBack: () => header.classList.remove('change-color'),
            preventOverlaps: true,
            onRefresh: (self) => {

                if (self.isActive) header.classList.add('change-color');
            }
        });
    });
}

const headerColor = new MutationObserver(() => {
    if (document.querySelector(".calendar-page")) {
        initHeaderColorTriggers();
    }
});

headerColor.observe(document.body, {
    childList: true,
    subtree: true,
});







if (document.readyState === 'complete') {
    initHeaderColorTriggers();
} else {
    window.addEventListener('load', initHeaderColorTriggers);
}
