document.addEventListener('DOMContentLoaded', (e) => {
	
  document.addEventListener('wpcf7mailsent', function (response) {
	 const modalThanks = document.querySelector('#modal-form-thanks');
		if (modalThanks) {
			  modalThanks.classList.add("modal-form-thanks__visible");
			  const modalThanksCloseBtn = modalThanks.querySelector('.modal-form-thanks__close');
			  modalThanksCloseBtn.addEventListener("click", closeModal);
		}
	 function closeModal() {
      	modalThanks.classList.remove("modal-form-thanks__visible");
    }
  });
	
});
