$(function(){
	
	$('#ingresar').on('click',function(){
		var usuario = $('#usuario').val();
		var password = $('#password').val();
		var area = $('#area').val();
		var url = '../processlogin.php';
		var total = usuario.length * password.length * area.length;
		if (total>0){
			$.ajax({
				type: 'POST',
				url: url,
				data: 'usuario='+usu+'&password='+pass+'&area='+area,
				success: function(valor){
					if(valor == 'usuario'){
						$('#mensaje').addClass('error').html('El usuario ingresado no existe').show(300).delay(3000).hide(300);
						$('#usuario').focus();
						return false;
					}else if(valor == 'area'){
						$('#mensaje').addClass('error').html('Usted no pertenece al area seleccionada').show(300).delay(3000).hide(300);
						$('#area').focus();
						return false;
					}else if(valor == 'password'){
						$('#mensaje').addClass('error').html('Su password es incorrecto').show(300).delay(3000).hide(300);
						$('#pass').focus();
						return false;
					}else if(valor == 'Empleado'){
						document.location.href = 'employee.php';
					}else if(valor == 'Administracion'){
						document.location.href = 'admin.php';
					}
				}
			});
			return false;
		}else{
			$('#mensaje').addClass('error').html('Complete todos los campos').show(300).delay(3000).hide(300);
		}
	});
	
});