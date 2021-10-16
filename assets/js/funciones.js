function login(){
	//console.log("entro");
	//this.preventDefault();
	var formulario = new FormData($('#formLogin')[0]);
	$.ajax({
		url: "Users/login",
		type: "POST",
		data: formulario,
		cache: false,
		contentType: false,
		processData: false,
	})
	.done(function(resp){
		//var resp = JSON.parse(resp);
		if(resp.respuesta == 0){
			swal("ERROR", "Ususario y/o contraseña incorrectos", "error");
		}else{
			swal("Bienvenido", "Bienvenido", "success");
		}
	})

	
}