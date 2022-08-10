const contactBtnElem = document.getElementById('contact');
const contactModalElem = document.getElementById('contactModal');
const closeContactModalBtnElem = document.getElementById('contactModalClose');

function openModal() {
  contactModalElem.style.display = 'block';
  setTimeout(() => {
    contactModalElem.classList.add('modal_open');
  }, 0);
  document.body.style.overflow = 'hidden';
  contactModalElem.querySelector('input').focus();
}

function closeModal() {
  contactModalElem.classList.remove('modal_open');
  setTimeout(() => {
    contactModalElem.style.display = 'none';
    document.body.style.overflow = 'auto';
  }, 300);
}

contactBtnElem.addEventListener('click', openModal);
closeContactModalBtnElem.addEventListener('click', closeModal);

const inputs = document.querySelectorAll('.form-field__input');
inputs.forEach(elem => {
  elem.setAttribute('aria-invalid', '');
})