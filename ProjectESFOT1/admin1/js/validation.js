function validar(form){
	msg_error =""
	msg_error +=validarNombre(form.nombre.value);
	msg_error+=validarApellido(form.apellido.value);
	//msg_error+=validarFechaNacimiento(form.fechaNacimiento.value);
	msg_error+=validarDireccion(form.direccion.value);
	msg_error+=validarTelefono(form.telefono.value);
	//msg_error+=validarEstadoCivil(form.estadoCivil.value);
	msg_error+=validarDepartamento(form.departamento.value);
	
	if(msg_error=="")
		return true;
	else
	{
		var mensajeError = msg_error

		document.getElementById("text").innerHTML =mensajeError//The getElementById() method accesses the first element with the specified id.
		return false
	}
}

function validarNombre(valor)
{
	if(valor=="")
		return "Nombre: Ingrese su nombre.\n"
		//Uso de expresiones regulares
		else if(!valor.match(/^[a-zA-Z]*$/))//Expresion regular que comprubea que en campo solo existan letras no numeros
		return "Nombre: Solo letras, No numeros,No caracteres especiales.\n"
	return ""
  
}

function validarApellido(valor)
{
	if(valor=="")
		return "Apellido: Ingrese su apellido.\n"
	else if(!valor.match(/^[a-zA-Z]*$/))//Expresion regular que comprubea que en campo solo existan letras no numeros
		return "Apellido: Solo letras, No numeros,No caracteres especiales.\n"
	return ""
  
}


/*function validarFechaNacimiento(valor)
{
	if(isNaN(valor))
		return "\n"
		else
			if()
				return "\n"
	return ""
  
}*/

function validarDireccion(valor)
{
	if(valor=="")
		return "Direccion: Ingrese su direccion.\n";
	else if(!valor.match(/^[a-zA-Z]*$/))//Expresion regular que comprubea que en campo solo existan letras no numeros
		return "Direccion: Solo letras, No numeros,No caracteres especiales. \n\n"
	return ""
  
}

function validarTelefono(valor)
{
	if(valor == "")
		return "Telefono:  Ingrese su numero de telefono celular.\n"
	else if(isNaN(valor))
		return "Telefono: Ingrese solo numeros, No letras, No caracteres especiales.\n"
	else if(!valor.match(/[0-9]{10}$/))//Expresion que solo permite ingresar numero desde el cero hasta el 9
		return "Telefono: Ingrese su numero de celular completo. Ejm: 0989964471.\n"
	return "\n"
  
}

function validarDepartamento(valor)
{
	if(valor=="")
		return "Departamento: Ingrese el departamento al que pertenece.\n"
	else if(!valor.match(/^[a-zA-Z]*$/))//Expresion regular que comprubea que en campo solo existan letras no numeros
		return "Departamente: Solo letras, No numeros,No caracteres especiales. \n"
	return "" 
}
//Para sabe mas hacerca del uso de expresiones regulares se puede consultar en : http://idesweb.es/proyecto/proyecto-prac06-js-expresiones-regulares-dom
/**Fuenetes de consulta
https://www.youtube.com/watch?v=sPvO9ZfTG6M
https://www.youtube.com/watch?v=_-7WZfx6YNs
https://www.youtube.com/watch?v=9ON-zI5BvYA
https://www.youtube.com/watch?v=cnlpxnUSK_E
*/