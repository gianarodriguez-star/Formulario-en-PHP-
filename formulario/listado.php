<?php

include("conexion.php");

$sql = "SELECT * FROM estudiantes ORDER BY id DESC";

$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Listado de Estudiantes</title>

    <link rel="stylesheet" href="style.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >
</head>
<body>

<div class="dashboard-container">

    <!-- Encabezado -->
    <header class="form-header">

        <div class="logo-area">

            <span class="icon">📋</span>

            <h1>Listado de Estudiantes</h1>

        </div>

        <p>
            Registros almacenados en la base de datos
        </p>

    </header>

    <!-- Tarjeta -->
    <main class="form-card">

        <div class="button-group">

            <a href="index.php" class="btn btn-primary">
                Nuevo Registro
            </a>

        </div>

        <br>

        <!-- Tabla -->
        <div class="table-container">

            <table class="tabla">

                <thead>

                    <tr>

    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Lenguajes</th>
    <th>Facultad</th>
    <th>Sexo</th>
    <th>Observación</th>
    <th>Acciones</th>

</tr>

                </thead>

                <tbody>

                <?php
                while($mostrar = mysqli_fetch_array($resultado)){
                ?>

                    <tr>
                        <td>
    <?php echo $mostrar['id']; ?>
</td>
<td>
    <?php echo $mostrar['nombre']; ?>
</td>
<td>
    <?php echo $mostrar['apellido']; ?>
</td>
<td>
    <?php echo $mostrar['email']; ?>
</td>

<td>
    <?php echo $mostrar['lenguajes']; ?>
</td>

<td>
    <?php echo $mostrar['facultad']; ?>
</td>

<td>
    <?php echo $mostrar['sexo']; ?>
</td>

<td class="observacion">
    <?php echo $mostrar['observacion']; ?>
</td>
<td class="acciones">

    <a
        href="editar.php?id=<?php echo $mostrar['id']; ?>"
        class="btn-edit"
    >
        Editar
    </a>
<a
    href="#"
    class="btn-delete"
    onclick="confirmarEliminacion(<?php echo $mostrar['id']; ?>)"
>
    Eliminar
</a>

</td>

                    </tr>

                <?php
                }
                ?>

                </tbody>

            </table>

        </div>

    </main>

</div>
<script>

function confirmarEliminacion(id){

    Swal.fire({

        title: '¿Eliminar registro?',
        text: "Esta acción no se puede deshacer",
        icon: 'warning',

        showCancelButton: true,

        confirmButtonColor: '#ff4d6d',
        cancelButtonColor: '#6c757d',

        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'

    }).then((result) => {

        if(result.isConfirmed){

            window.location = "eliminar.php?id=" + id;
        }

    });

}

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>