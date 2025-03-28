// Ici vous pourrez rajouter l'evenement de votre modal
document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("popup-jeu-concours");
  const closeBtn = document.getElementById("popup-close");
  const popupForm = document.getElementById("popup-form");

  // N'affiche le popup qu'une seule fois (stockage local)
  if (!localStorage.getItem("popupShown")) {
    setTimeout(() => {
      popup.classList.remove("hidden");
      localStorage.setItem("popupShown", "true");
    }, 1000); // délai de 1s pour ne pas gêner
  }

  closeBtn.addEventListener("click", () => {
    popup.classList.add("hidden");
  });

  popupForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const email = document.getElementById("popup-email").value;

    // Traitement fictif — en prod on l’enverrait à une API
    alert(`Merci ! Un e-mail sera envoyé à ${email}.`);
    popup.classList.add("hidden");
  });
});