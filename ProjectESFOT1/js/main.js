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
    
    $("#btn-cancelar").on('click', function(){
   window.location.href='index.php';
   
  })
  
   $("#btn-cancelarT").on('click', function(){
   window.location.href='table.php';
   })
    
})
    
    