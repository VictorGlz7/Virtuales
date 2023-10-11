<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos Personales</title>
</head>
<body>
    <h2>Formulario de Datos Personales</h2>
    <form method="post" action="procesar_formulario.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="sexo">Sexo:</label>
        <input type="radio" id="sexo" name="sexo" value="Masculino">Masculino
        <input type="radio" id="sexo" name="sexo" value="Femenino">Femenino<br><br>

        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera" required><br><br>

        <label for="semestre">Semestre:</label>
        <input type="number" id="semestre" name="semestre" required><br><br>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required><br><br>

        <label for="fecha_captura">Fecha de Captura:</label>
        <input type="date" id="fecha_captura" name="fecha_captura" required><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

        <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
        <input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required><br><br>

        <label for="lugar_procedencia">Lugar de Procedencia:</label>
        <input type="text" id="lugar_procedencia" name="lugar_procedencia" required><br><br>

        <label for="EstadoCivil">Estado Civil:</label>
        <select id="EstadoCivil" name="EstadoCivil">
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
            <option value="Viudo">Viudo</option>
        </select><br><br>

        <label for="domicilio">Domicilio:</label>
        <textarea id="domicilio" name="domicilio" required></textarea><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>