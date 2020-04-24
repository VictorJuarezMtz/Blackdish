with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && correo.value==""){
			ok=false;
			alert("Debe escribir un nombre de usuario");
			correo.focus();
		}
if(ok && pw.value==""){
			ok=false;
			alert("Debe escribir la contraseña");
			pw.focus();
		}
		if(ok){ submit(); }
	}
}
function validarEmail(elemento){
  var texto = document.getElementById(elemento.id).value;
  var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (!regex.test(texto)) {
      document.getElementById("resultado").innerHTML = "Correo invalido";
  } else {
    document.getElementById("resultado").innerHTML = "";
  }
}