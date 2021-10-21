import MicroModal from "./micromodal";

const callOrModalButtons = document.querySelectorAll(".js-call-or-modal");
if (callOrModalButtons.length) {
  callOrModalButtons.forEach((button) => {
    button.addEventListener("click", () => {
      if (window.matchMedia("(min-width: 768px)").matches) {
        MicroModal.show(button.dataset.modal);
      } else {
        window.location.href = `tel:${button.dataset.tel}`;
      }
    });
  });
}

const jsRequestFormAll = document.querySelectorAll(".js-request-form");
if (jsRequestFormAll.length) {
  jsRequestFormAll.forEach((form) => {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      const formData = new FormData(e.target);

      const modal = document.getElementById("modal-request");
      for (const item of formData.entries()) {
        modal.querySelector(`[name="${item[0]}"]`).value = item[1];
      }

      MicroModal.show("modal-request");
    });
  });
}
