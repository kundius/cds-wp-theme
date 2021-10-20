import MicroModal from './micromodal'

const callOrModalButtons = document.querySelectorAll('.js-call-or-modal')
if (callOrModalButtons.length) {
  callOrModalButtons.forEach(button => {
    button.addEventListener('click', () => {
      if (window.matchMedia('(min-width: 768px)').matches) {
        MicroModal.show(button.dataset.modal)
      } else {
        window.location.href = `tel:${button.dataset.tel}`
      }
    })
  })
}
