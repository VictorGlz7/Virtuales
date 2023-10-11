<!DOCTYPE html>
<html>
<head>
    <title>Procesando el formulario</title>
</head>
<body>
    <h2>Datos enviados desde el formulario</h2>

    <?php
    // Configuración de la conexión a la base de datos
    $host = 'mysql'; // Este es el nombre del servicio MySQL en Docker Compose
    $user = 'root'; // El usuario predeterminado
    $pass = 'pass'; // La contraseña que configuraste en Docker Compose
    $db = 'mi_bd'; // El nombre de la base de datos

    // Crear la conexión a la base de datos
    $conn = new mysqli($host, $user, $pass, $db);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar los datos del formulario
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $sexo = $_POST["sexo"];
        $carrera = $_POST["carrera"];
        $semestre = $_POST["semestre"];
        $matricula = $_POST["matricula"];
        $fecha_captura = $_POST["fecha_captura"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $lugar_nacimiento = $_POST["lugar_nacimiento"];
        $lugar_procedencia = $_POST["lugar_procedencia"];
        $EstadoCivil = $_POST["EstadoCivil"];
        $domicilio = $_POST["domicilio"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];

        // Consulta SQL para insertar los datos en la tabla 'datos' de la base de datos
        $sql = "INSERT INTO datos (nombre, edad, sexo, carrera, semestre, matricula, fecha_captura, fecha_nacimiento, lugar_nacimiento, lugar_procedencia, EstadoCivil, domicilio, email, telefono) VALUES ('$nombre', $edad, '$sexo', '$carrera', $semestre, '$matricula', '$fecha_captura', '$fecha_nacimiento', '$lugar_nacimiento', '$lugar_procedencia', '$EstadoCivil', '$domicilio', '$email', '$telefono')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos almacenados correctamente.";
        } else {
            echo "Error al almacenar datos: " . $conn->error;
        }
    } else {
        echo "<p>No se han enviado datos.</p>";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
    ?>

</body>
</html>