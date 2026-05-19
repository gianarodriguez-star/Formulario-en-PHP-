<?php

include("conexion.php");

/* Obtener datos */
$id = $_POST['id'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];

$facultad = $_POST['facultad'];
$sexo = $_POST['sexo'];
$observacion = $_POST['observacion'];

/* Lenguajes */
if(isset($_POST['lenguajes'])){

    $lenguajes = implode(", ", $_POST['lenguajes']);

}else{

    $lenguajes = "Ninguno";
}

/* UPDATE */
$sql = "UPDATE estudiantes SET

nombre = '$nombre',
apellido = '$apellido',
email = '$email',
lenguajes = '$lenguajes',
facultad = '$facultad',
sexo = '$sexo',
observacion = '$observacion'

WHERE id = '$id'
";

/* Ejecutar */
$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <title>Actualizar</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<?php

if($resultado){

    echo "

    <script>

        Swal.fire({

            icon: 'success',
            title: 'Registro actualizado',
            text: 'Los datos fueron modificados correctamente',
            confirmButtonColor: '#6aa9ff'

        }).then(() => {

            window.location = 'listado.php';

        });

    </script>

    ";

}else{

    echo "

    <script>

        Swal.fire({

            icon: 'error',
            title: 'Error',
            text: 'No se pudieron actualizar los datos'

        }).then(() => {

            window.location = 'listado.php';

        });

    </script>

    ";
}

?>

</body>
</html>