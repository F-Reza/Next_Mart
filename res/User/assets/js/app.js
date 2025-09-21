document.addEventListener("DOMContentLoaded", function(){
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebar = document.querySelector('.sidebar');

  if(sidebarToggle){
    sidebarToggle.addEventListener('click', ()=>{
      sidebar.classList.toggle('show');
    });
  }
});
