$(document).ready(function () {
  $('#todo-modal').modal({ backdrop: 'static', keyboard: false });
});


function toggleModal() {
  const modal = document.getElementById("todo-modal");
  modal.classList.toggle("hidden");
  modal.classList.toggle("flex");
}

function editToggleModal() {
  const modal = document.getElementById("edit-todo-modal");
  modal.classList.toggle("hidden");
  modal.classList.toggle("flex");
}