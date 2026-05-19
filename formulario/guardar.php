<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];

$facultad = $_POST['facultad'];
$sexo = $_POST['sexo'];
$observacion = $_POST['observacion'];

if(isset($_POST['lenguajes'])){

    $lenguajes = implode(", ", $_POST['lenguajes']);

}else{

    $lenguajes = "Ninguno";
}

$sql = "INSERT INTO estudiantes
(
    nombre,
    apellido,
    email,
    lenguajes,
    facultad,
    sexo,
    observacion
)
VALUES
(
    '$nombre',
    '$apellido',
    '$email',
    '$lenguajes',
    '$facultad',
    '$sexo',
    '$observacion'
)";


$resultado = mysqli_query($conexion, $sql);

/* Verificar */
if($resultado){

    echo "

    <script>

        alert('Datos guardados correctamente');

        window.location = 'listado.php';

    </script>

    ";

}else{

    echo "

    <script>

        alert('Error al guardar los datos');

        window.location = 'index.php';

    </script>

    ";
}

?>