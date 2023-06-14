function cambiar() {
  var contenedor = document.getElementById('contenedor')
  contenedor.style.borderColor = 'black'
  var botones = document.getElementsByClassName('boton');
  for (let i = 0; i < botones.length; i++) {
    botones[i].style.color = 'white'
    botones[i].style.background = 'black'
    botones[i].style.borderColor = 'black'
  }
  var titulo = document.getElementById('titulo')
  titulo.style.borderColor = 'black'
  titulo.style.background = 'black'
  titulo.style.color = 'white'
  var mensaje = document.getElementById('mensaje')
  mensaje.style.background = 'black'
}
function pregunta2() {
  document.getElementById('titulo').innerHTML = 'Pregunta 2'
  var contenido = document.getElementById('contenido');
  console.log(contenido);
  const div1 = document.createElement("div");
  div1.innerHTML = "filas:";
  contenido.appendChild(div1);
  const num1 = document.createElement("input");
  num1.type = "number";
  num1.id = "filas";
  div1.appendChild(num1);
  const div2 = document.createElement("div");
  div2.innerHTML = "columnas:";
  contenido.appendChild(div2);
  const num2 = document.createElement("input");
  num2.type = "number";
  num2.id = "columnas";
  div2.appendChild(num2);
  const boton = document.createElement('button')
  boton.innerHTML = 'Dibujar';
  boton.addEventListener('click', function () {
    filas = document.getElementById('filas').value;
    columnas = document.getElementById('columnas').value;
    html = '<table border="1">';
    for (i = 0; i < filas; i++) {
      html += `<tr>`
      for (j = 0; j < columnas; j++) {
        html += `<td>&nbsp;</td> `
      }
      html += `</tr>`
    }
    html += '</table>';
    contenido.innerHTML += '<br>' + html;
  })
  contenido.appendChild(div1);
  contenido.appendChild(div2);
  contenido.appendChild(boton);
  div1.appendChild(num1);
}
function pregunta3() {
  var contenedor;
  contenedor = document.getElementById('contenido');
  document.getElementById('titulo').innerHTML = 'Pregunta 3'
  fetch('pregunta3.php')
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);
}
function registrar() {
  var contenedor;
  contenedor = document.getElementById('mensaje');
  var formulario = document.getElementById("form-datos");
  var parametros = new FormData(formulario);
  var ajax = new XMLHttpRequest() //crea el objetov ajax 
  ajax.open("post", 'create.php', true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      contenedor.innerHTML = ajax.responseText;
    }
  }
  ajax.send(parametros);
}
function pregunta4() {
  var contenedor;
  contenedor = document.getElementById('contenido');
  document.getElementById('titulo').innerHTML = 'Pregunta 4'
  fetch('read.php')
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);
}
function ordenar(orden) {
  var contenedor;
  contenedor = document.getElementById('contenido');
  document.getElementById('titulo').innerHTML = 'Pregunta 4'
  fetch('read.php?orden=' + orden)
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);
}
function pregunta5() {
  var contenedor;
  contenedor = document.getElementById('contenido');
  document.getElementById('titulo').innerHTML = 'Pregunta 5'
  fetch('pregunta5.html')
    .then(response => response.text())
    .then(data => {
      contenedor.innerHTML = data
      imagen = document.getElementById('imagen');
      fetch('datos.php')
        .then(response => response.text())
        .then(data => {
          libros = JSON.parse(data)
          slibros = document.getElementById('slibros');
          for (i = 0; i < libros.length; i++) {
            const option = document.createElement("option");
            option.value = libros[i].titulo
            option.imagen = libros[i].imagen
            option.innerHTML = libros[i].titulo
            slibros.appendChild(option);
          }
          slibros.addEventListener('change', function () {
            indiceseleccionado = slibros.selectedIndex;
            document.getElementById('imagenlibro').src = 'images/' + slibros.options[indiceseleccionado].imagen;
          //  console.log(slibros.options[indiceseleccionado].imagen);
          })
        })
    }
    );
}
function login() {
  var contenedor;
  contenedor = document.getElementById('contenido');
  document.getElementById('titulo').innerHTML = 'login'
  fetch('login.php')
    .then(response => response.text())
    .then(data => contenedor.innerHTML = data);
}

function autenticar(){
  
  var formulario = document.getElementById("form-login");
  var parametros = new FormData(formulario);
  var ajax = new XMLHttpRequest() //crea el objetov ajax 
  ajax.open("post", 'autenticar.php', true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {

      contenedor.innerHTML = ajax.responseText;
      if (ajax.responseText=='conexion con exito')
      {
        
      }
    }
  }
  ajax.send(parametros);
}