document.addEventListener('DOMContentLoaded', (e) => {
	
  document.addEventListener('wpcf7mailsent', function (response) {
	 const modalThanks = document.querySelector('#modal-form-thanks');
   const mainModal = document.querySelector('#modal-form');
   
		if (modalThanks) {
			  modalThanks.classList.add("modal-form-thanks__visible");
			  const modalThanksCloseBtn = modalThanks.querySelector('.modal-form-thanks__close');
			  modalThanksCloseBtn.addEventListener("click", closeModal);
		}
  if (mainModal) mainModal.classList.remove('modal-form__visible');
	 function closeModal() {
      	modalThanks.classList.remove("modal-form-thanks__visible");
    }
  });
	
});
