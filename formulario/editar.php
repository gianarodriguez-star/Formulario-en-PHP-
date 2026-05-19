<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM estudiantes WHERE id = '$id'";

$resultado = mysqli_query($conexion, $sql);

$mostrar = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Estudiante</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="dashboard-container">

    <header class="form-header">

        <div class="logo-area">
            <span class="icon">✏️</span>
            <h1>Editar Registro</h1>
        </div>

        <p>Actualice la información del estudiante</p>

    </header>

    <main class="form-card">

        <form action="actualizar.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">

    
            <div class="input-group">

                <label>Nombre</label>

                <input
                    type="text"
                    name="nombre"
                    value="<?php echo $mostrar['nombre']; ?>"
                    required
                >

            </div>

        
            <div class="input-group">

                <label>Apellido</label>

                <input
                    type="text"
                    name="apellido"
                    value="<?php echo $mostrar['apellido']; ?>"
                    required
                >

            </div>

            <div class="input-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    value="<?php echo $mostrar['email']; ?>"
                    required
                >

            </div>

            <?php
                $lenguajes = explode(", ", $mostrar['lenguajes']);
            ?>

            <div class="input-group">

                <label>Lenguajes favoritos</label>

                <div class="options-group">

                    <label class="option-item">

                        <input
                            type="checkbox"
                            name="lenguajes[]"
                            value="Java"

                            <?php
                                if(in_array("Java", $lenguajes)){
                                    echo "checked";
                                }
                            ?>
                        >

                        Java

                    </label>

                    <label class="option-item">

                        <input
                            type="checkbox"
                            name="lenguajes[]"
                            value="PHP"

                            <?php
                                if(in_array("PHP", $lenguajes)){
                                    echo "checked";
                                }
                            ?>
                        >

                        PHP

                    </label>

                    <label class="option-item">

                        <input
                            type="checkbox"
                            name="lenguajes[]"
                            value="C#"

                            <?php
                                if(in_array("C#", $lenguajes)){
                                    echo "checked";
                                }
                            ?>
                        >

                        C#

                    </label>

                    <label class="option-item">

                        <input
                            type="checkbox"
                            name="lenguajes[]"
                            value="Python"

                            <?php
                                if(in_array("Python", $lenguajes)){
                                    echo "checked";
                                }
                            ?>
                        >

                        Python

                    </label>

                </div>

            </div>

            <div class="input-group">

                <label>Facultad</label>

                <select name="facultad">

                    <option value="Ingeniería en Sistemas"
                        <?php
                            if($mostrar['facultad'] == "Ingeniería en Sistemas"){
                                echo "selected";
                            }
                        ?>
                    >
                        Facultad en Ingeniería en Sistemas(FISC)
                    </option>

                    <option value="Ingenieria Civil"
                        <?php
                            if($mostrar['facultad'] == "Ingenieria Civil"){
                                echo "selected";
                            }
                        ?>
                    >
                        Facultad en Ingeniería Civil(FIC)
                    </option>

                    <option value="Electrica"
                         <?php
                            if($mostrar['facultad'] == "Electrica"){
                                echo "selected";
                            }
                        ?>
                    >    
                       Facultad en Ingenieria Electrica (FIE)
                    </option>

                         <option value="Ingenieria Industrial" 
                        <?php
                            if($mostrar['facultad'] == "Ingenieria Industrial"){
                                echo "selected";
                            }
                        ?>
                    >
                       Facultad en Ingenieria Industrial (FII)
                    </option>

                    <option value="Ingenieria Mecanica"
                        <?php
                            if($mostrar['facultad'] == "Ingenieria Mecanica"){
                                echo "selected";
                            }
                        ?>
                         >
                       Facultad en Ingenieria Mecanica (FIM)

                    </option>
                    <option value="Ciencias y tecnologia" 
                        <?php
                            if($mostrar['facultad'] == "Ciencias y tecnologia"){
                                echo "selected";
                            }
                        ?>
                    >
                       Facultad en Ciencias y Tecnología (FCT)
                    </option>

                </select>

            </div>

            <!-- Sexo -->
            <div class="input-group">

                <label>Sexo</label>

                <div class="options-group">

                    <label class="option-item">

                        <input
                            type="radio"
                            name="sexo"
                            value="Masculino"

                            <?php
                                if($mostrar['sexo'] == "Masculino"){
                                    echo "checked";
                                }
                            ?>
                        >

                        Masculino

                    </label>

                    <label class="option-item">

                        <input
                            type="radio"
                            name="sexo"
                            value="Femenino"

                            <?php
                                if($mostrar['sexo'] == "Femenino"){
                                    echo "checked";
                                }
                            ?>
                        >

                        Femenino

                    </label>

                </div>

            </div>

            <div class="input-group">

                <label>Observación</label>

                <textarea
                    name="observacion"
                    rows="6"
                ><?php echo $mostrar['observacion']; ?></textarea>

            </div>

            <div class="button-group">

                <button type="submit" class="btn btn-primary">
                    Actualizar datos
                </button>

                <a href="listado.php" class="btn btn-secondary">
                    Cancelar
                </a>

            </div>

        </form>

    </main>

</div>

</body>
</html>