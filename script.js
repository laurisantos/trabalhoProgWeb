const content = document.querySelector('.content')

// abre/fecha modal
const modal = document.querySelector('.modal');
const openModal = () => modal.style.display = 'flex';
const closeModal = () => modal.style.display = 'none';

// botaozin de mais na sidebar
const addBtn = document.querySelector('.add-serie-btn');
addBtn.onclick = openModal;

// botaozin de fechar
const closeBtn = document.querySelector('.close-icon');
closeBtn.onclick = closeModal;