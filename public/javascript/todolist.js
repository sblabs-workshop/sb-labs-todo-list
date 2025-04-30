$(document).ready(function () {
});


function toggleModal() {
  const modal = document.getElementById("todo-modal");
  modal.classList.toggle("hidden");
  modal.classList.toggle("flex");
}



function editTasks(task) {
  toggleModal();
  $('#taskTitle').val(task.title);
  $('#taskDescription').val(task.description);
  $('#is_completed').prop('checked', task.completed === 1 ? true : false);
}