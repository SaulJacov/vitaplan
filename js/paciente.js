function captura(){
	var email=document.getElementById("ema").value;
	var nombre=document.getElementById("nombre2").value;
	var apaterno=document.getElementById("apP").value;
	var amaterno=document.getElementById("apM").value;
	var telefono=document.getElementById("tel").value;
	var contrasena=document.getElementById("cont").value;
	var contrasena2=document.getElementById("cont2").value;
	if(contrasena!=contrasena2)
		alert("Las contraseñas deben coincidir, intentelo de nuevo");
}