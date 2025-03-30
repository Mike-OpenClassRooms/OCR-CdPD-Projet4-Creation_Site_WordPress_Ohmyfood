document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("popup-jeu-concours");

  if (!popup) return;

  // Affiche la popup si jamais elle n'a jamais été affichée
  if (!localStorage.getItem("popupShown")) {
    popup.classList.remove("hidden");
    localStorage.setItem("popupShown", "true");
  }

  // Utilisation d'un intervalle pour attendre que le bouton soit bien dans le DOM
  const interval = setInterval(() => {
    const closeBtn = document.getElementById("popup-close");
    if (closeBtn) {
      closeBtn.addEventListener("click", () => {
        popup.classList.add("hidden");
      });
      clearInterval(interval); // Une fois trouvé, on arrête de chercher
    }
  }, 200);
});