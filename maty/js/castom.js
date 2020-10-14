const insertModal = document.querySelector("#insertModal");
const btn = document.querySelector("#insertButton");
const span = document.querySelector(".close");

btn.addEventListener('click', () => {
  insertModal.style.display = "block";
})

span.addEventListener('click', () => {
  insertModal.style.display = "none";
})

window.addEventListener('click', (e) => {
  e.target == insertModal ? insertModal.style.display = "none" : '';
})
