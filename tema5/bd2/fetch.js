function listar()
{
    var contenedor;
    contenedor = document.getElementById('datos');
    fetch('read.php')
        .then(response => response.text())
        .then(data => function (){
            console.log(data)
            datos=JSON.parse(data)
            console.log(datos)
        });

//     `<div>
//     <form action="read.php" method="get">
//         <label for="buscar">Buscar</label>
//         <input type="text" name="buscar" value="<?php echo isset($_GET['buscar'])?$_GET['buscar']:''; ?>">
//         <input type="submit" value="Buscar">
//     </form>
// </div>
// <table>
//     <tr>
//         <th>Fotografia</th>
//         <th><a href="read.php?orden=nombres"> Nombres</a></th>
//         <th><a href="read.php?orden=apellidos">Apellidos</a> </th>
//         <th><a href="read.php?orden=celular">Celular</a></th>
//         <th><a href="read.php?orden=nombre">Profesion</a></th>
//         <th>Operaciones</th>
//     </tr>
//     <?php while ($row = $resultado->fetch_assoc()) {
//     ?>
//         <tr>
//         <td><img width="100px" src="images/<?php echo $row['fotografia'];  ?>" alt=""> </td>
//         <td><?php echo $row['nombres'] ?> </td>
//             <td><?php echo $row['apellidos'] ?></td>
//             <td><?php echo $row['celular'] ?></td>
//             <td><?php echo $row['profesion'] ?></td>
//             <td>
//                     <a href="javascript:editarPersona('<?php echo $row['id']; ?>')">Editar</a>
//                     <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                
//             </td>
//         </tr>
//     <?php } ?>
// </table>


// <?php
// } else {
// echo "la tabla no tiene datos que mostrar";
// }
// }`
}

function cargarContenido(abrir) {

    var contenedor;
    contenedor = document.getElementById('datos');
    fetch(abrir)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}
function editarPersona(id) {
    var contenedor;
    contenedor = document.getElementById('datos');
    fetch('form_update.php?id=' + id)
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);

}
function crearPersona() {
    var contenedor;
    contenedor = document.getElementById('datos');
    var formulario = document.getElementById("form-persona");
    var parametros = new FormData(formulario);
    fetch("create.php",
        {
            method: "POST",
            body: parametros
        })
        .then(response => response.text())
        .then(data => contenedor.innerHTML = data);
}