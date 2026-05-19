<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta Estudiantil</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="dashboard-container">

        <!-- Encabezado -->
        <header class="form-header">
            <div class="logo-area">
                <span class="icon">🎓</span>
                <h1>Encuesta Estudiantil</h1>
            </div>

            <p>
                Universidad Tecnológica Centro de Bocas del Toro
            </p>
        </header>

        <!-- Tarjeta del formulario -->
        <main class="form-card">

            <form action="guardar.php" method="POST">

                <!-- Nombre -->
                <div class="input-group">
                    <label for="nombre">Nombre</label>

                    <input 
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Ingrese su nombre"
                        required
                    >
                </div>

                <!-- Apellido -->
                <div class="input-group">
                    <label for="apellido">Apellido</label>

                    <input 
                        type="text"
                        id="apellido"
                        name="apellido"
                        placeholder="Ingrese su apellido"
                        required
                    >
                </div>

                <!-- Email -->
                <div class="input-group">
                    <label for="email">Email</label>

                    <input 
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Ingrese su email"
                        required
                    >
                </div>

                <!-- Lenguajes -->
                <div class="input-group">
                    <label>Lenguajes que más le gustan</label>

                    <div class="options-group">

                        <label class="option-item">
                            <input type="checkbox" name="lenguajes[]" value="Java">
                            Java
                        </label>

                        <label class="option-item">
                            <input type="checkbox" name="lenguajes[]" value="PHP">
                            PHP
                        </label>

                        <label class="option-item">
                            <input type="checkbox" name="lenguajes[]" value="C#">
                            C#
                        </label>

                        <label class="option-item">
                            <input type="checkbox" name="lenguajes[]" value="Python">
                            Python
                        </label>

                    </div>
                </div>

                <!-- Facultad -->
                <div class="input-group">
                    <label for="facultad">Seleccione su Facultad</label>

                    <select id="facultad" name="facultad">

                        <option value="Ingeniería en Sistemas">
                            Facultad en Ingeniería en Sistemas (FISC)
                        </option>

                        <option value="Ingeniería Civil">
                            Facultad en Ingeniería Civil (FIC)
                        </option>

                        <option value="Ingeniería Electrica">
                            Facultad en Ingeniería Eléctrica (FIE)
                        </option>

                        <option value="Ingeniería Industrial">
                            Facultad en Ingeniería Industrial (FII)
                        </option>

                        <option value="Ingeniería Mecanica">
                            Facultad en Ingeniería Mecánica (FIM)
                        </option>

                        <option value="Ciencias y Tecnología">
                            Facultad en Ciencias y Tecnología (FCT)
                        </option>

                    </select>
                </div>

                <!-- Sexo -->
                <div class="input-group">
                    <label>Seleccione sexo</label>

                    <div class="options-group">

                        <label class="option-item">
                            <input type="radio" name="sexo" value="Masculino">
                            Masculino
                        </label>

                        <label class="option-item">
                            <input type="radio" name="sexo" value="Femenino">
                            Femenino
                        </label>

                    </div>
                </div>

                <!-- Observación -->
                <div class="input-group">
                    <label for="observacion">Observación</label>

                    <textarea
                        id="observacion"
                        name="observacion"
                        rows="6"
                        placeholder="Ingrese alguna observación"
                    ></textarea>
                </div>

                <!-- Botones -->
<div class="button-group">

    <button type="submit" class="btn btn-primary">
        Enviar encuesta
    </button>

    <button type="reset" class="btn btn-secondary">
        Borrar datos
    </button>

    <a href="listado.php" class="btn btn-secondary">
        Ver listado
    </a>

</div>

            </form>

        </main>

    </div>

</body>
</html>