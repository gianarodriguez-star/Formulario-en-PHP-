<?php

include("conexion.php");

/* Obtener ID */
$id = $_GET['id'];

/* DELETE */
$sql = "DELETE FROM estudiantes WHERE id = '$id'";

/* Ejecutar */
$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">

    <title>Eliminar</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<?php

if($resultado){

    echo "

    <script>

        Swal.fire({

            icon: 'success',
            title: 'Registro eliminado',
            text: 'El estudiante fue eliminado correctamente',
            confirmButtonColor: '#ff4d6d'

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
            text: 'No se pudo eliminar el registro'

        }).then(() => {

            window.location = 'listado.php';

        });

    </script>

    ";
}

?>

</body>
</html>