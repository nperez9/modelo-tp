function enviar_formulario(event)
{
	event.preventDefault();
	if(!validar_enviar_formulario())
		return false;

	data = {nombre:   $('#nombre').val(),
			email:    $('#email').val(),
			mensaje:  $('#mensaje').val(),
			asunto:     $('#asunto').val()};
	// saca el formulario
	jxr = $.ajax({
		url: './include/enviar_correo.php',
		method: 'POST',
		data: data,
		success: function(data){
					//alert(data);
				}}).done(function(){
			// esto pasa si da true
			$('#contactForm')[0].reset();
			swal('Su correo ha sido enviado');
		});
}

function validar_enviar_formulario(){
    var error = "";
	if($('#nombre').val() == "")
        error += "Debe ingresar un Nombre\n";

	if($('#email').val() == "")
    	error += "Debe ingresar una direccion de Email\n";

	if($('#mensaje').val() == "")
        error += "Debe ingresar un Mensaje\n";

    if(error != ""){
        swal('Faltan completar datos', error, 'error');
        return false; 
    }
    return true;
}
