document.addEventListener("DOMContentLoaded", function () {
 // ----- Pop-up concours -----
  const popup = document.getElementById("popup-jeu-concours");
  const closeBtn = document.getElementById("popup-close");
  const popupForm = document.getElementById("popup-form");
  const popupEmail = document.getElementById("popup-email");

  if (popup && closeBtn && popupForm && popupEmail && !localStorage.getItem("popupShown")) {
    setTimeout(() => {
      popup.classList.remove("hidden");
      localStorage.setItem("popupShown", "true");
    }, 1000);

    closeBtn.addEventListener("click", () => {
      popup.classList.add("hidden");
    });

    popupForm.addEventListener("submit", (e) => {
      e.preventDefault();
      alert(`Merci ! Un e-mail sera envoyé à ${popupEmail.value}.`);
      popup.classList.add("hidden");
      });
    }
  });