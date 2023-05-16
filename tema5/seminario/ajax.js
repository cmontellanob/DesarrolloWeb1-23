function cargarContenido(abrir) {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var ajax = new XMLHttpRequest() //crea el objetov ajax 
	ajax.open("get", abrir, true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
	ajax.send();
}

function crea_lista_parametros() {
	var tTitulo = document.getElementById("tTitulo");
	var tIdentidad = document.getElementById("tIdentidad");
	var tNombres = document.getElementById("tNombres");
	var tApellidos = document.getElementById("tApellidos");
	var RGSexo = document.getElementById("RGSexo");
	var tEdad = document.getElementById("tEdad");
	var tEmail = document.getElementById("tEmail");
	var SDepartamento = document.getElementById("SDepartamento");
	var tProfesion = document.getElementById("tProfesion");
	var sTipo = document.getElementById("sTipo");
	var tNumeroDeposito = document.getElementById("tNumeroDeposito");
	return "tTitulo=" + encodeURIComponent(tTitulo.value) +
		"&tIdentidad=" + encodeURIComponent(tIdentidad.value) +
		"&tNombres=" + encodeURIComponent(tNombres.value) +
		"&tApellidos=" + encodeURIComponent(tApellidos.value) +
		"&nocache=" + Math.random();
}
function Preinscribir() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var cadena = crea_lista_parametros();
	
	 ajax = new XMLHttpRequest()
	ajax.open("POST", "preinscribir.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); //clave para que funcione cuando se envia por post 
	ajax.send(cadena);

}


function autenticar() {
	var cadena = crea_lista_login();
	ajax = nuevoAjax();
	ajax.open("POST", "autenticar.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			ingreso = document.getElementById('ingreso');
			ingreso.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(cadena);
}

function cerrar() {
	ajax = nuevoAjax();
	ajax.open("GET", "cerrar.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			ingreso = document.getElementById('ingreso');
			ingreso.innerHTML = ajax.responseText;
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(null);
}

function crea_lista_login() {
	var tUsuario = document.getElementById("usuario");
	var tContrasena = document.getElementById("pass");
	return "user=" + encodeURIComponent(tUsuario.value) +
		"&pass=" + encodeURIComponent(tContrasena.value) +
		"&nocache=" + Math.random();
}


function Registro() {
	var contenedor;
	contenedor = document.getElementById('contenido');
	var cadena = crea_lista_registro();
	ajax = nuevoAjax();
	ajax.open("POST", "registro.php", true);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4) {
			contenedor.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); // esta linea es importante
	ajax.send(cadena);

}

function crea_lista_registro() {
	var nombre = document.getElementById("txtNombre");
	var apellido = document.getElementById("txtApellido");
	var sexo = document.getElementById("txtSexo");
	var user = document.getElementById("txtUsuarios");
	var pass = document.getElementById("txtContrasena");
	var nivel = document.getElementById("txtNivel");

	return "nombre=" + encodeURIComponent(nombre.value) +
		"&apellido=" + encodeURIComponent(apellido.value) +
		"&sexo=" + encodeURIComponent(sexo.value) +
		"&user=" + encodeURIComponent(user.value) +
		"&pass=" + encodeURIComponent(pass.value) +
		"&nivel=" + encodeURIComponent(nivel.value) +
		"&nocache=" + Math.random();
}

function cambiarColor(color) {
	document.body.style.background = color;
}
