$(document).ready(function() {  
$("#btn-salir").on('click', function(){
   //window.location.href='#myForm';
    document.getElementById("myForm").reset();
    $("#fileDisplayArea").empty();
  })
    
   $('#myModal').on('hidden.bs.modal', function(){
       document.getElementById("myForm").reset();
    $("#fileDisplayArea").empty();
})
    
})
    
    