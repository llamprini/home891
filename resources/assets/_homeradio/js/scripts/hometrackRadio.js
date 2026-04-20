function initRadioPlayer() {
  const thisRadioPlayer = document.querySelector(".player-wrapper");
  const isDesktop = window.matchMedia("(min-width: 992px)").matches;

  if (!thisRadioPlayer || !isDesktop) return;

  const hometrack = document.querySelector(".single-hometrack");
  if (!hometrack) return;

  thisRadioPlayer.classList.add("opacity");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 40) {
      thisRadioPlayer.classList.remove("opacity");
    } else {
      thisRadioPlayer.classList.add("opacity");
    }
  });
}

// Observer για αλλαγές στο DOM
const radioObserver = new MutationObserver(() => {
  if (document.querySelector(".single-hometrack")) {
    initRadioPlayer();
  }
});

// Παρακολούθηση του body για αλλαγές
radioObserver.observe(document.body, {
  childList: true,
  subtree: true,
});

