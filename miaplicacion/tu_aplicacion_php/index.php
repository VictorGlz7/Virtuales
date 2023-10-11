<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Datos Personales</title>
    <style type="text/css">
    	.title{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 50px;
    gap: 15px;
}
h1,h2{
    color: #2D298A;
}

.container{
    margin-top: 50px;
    border-left: #CD730D 4px solid;
    border-right: #CD730D 4px solid;
}

form{
    display: flex;
    flex-direction: column;
    align-items:center;
}

h2{
    text-align: center;
}
.line{
    width: 25%;
    border: #CD730D 1px solid;
}

.btncolor{
    background-color: #2D298A;
    color: white;
}

.btncolor:hover{
    color: #CD730D;
    background-color: #2D298A;

}

.inputB{
    border: #2D298A 1px solid;
    border-radius: 5px;
}   text-align: center;

.line{
    width: 25%;
    border: #CD730D 1px solid;
}

.btncolor{
    background-color: #2D298A;
}

.btncolor:hover{
    color: #CD730D;
    background-color: #2D298A;

}

.inputB{
    border: #2D298A 1px solid;
}
    </style>
</head>
<body>
	<section class="title">
        <img src="icemaglogo.png" alt="logo">
        <h1>SISTEMA DE TUTORÍAS</h1>
        <div class="line"></div>
        <h1>MATERIA DE SISTEMAS VIRTUALES</h1>
        <div class="line"></div>
    </section>
    <section class="container">
        <h2>Formulario de Datos Personales</h2>
        <form method="post" action="procesar_formulario.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required class="inputB"><br><br>

            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" required class="inputB"><br><br>

            <label for="sexo">Sexo:</label>
            <input type="radio" id="sexo" name="sexo" value="Masculino">Masculino
            <input type="radio" id="sexo" name="sexo" value="Femenino">Femenino<br><br>

            <label for="carrera">Carrera:</label>
            <input type="text" id="carrera" name="carrera" required class="inputB"><br><br>

            <label for="semestre">Semestre:</label>
            <input type="number" id="semestre" name="semestre" required class="inputB"><br><br>

            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required class="inputB"><br><br>

            <label for="fecha_captura">Fecha de Captura:</label>
            <input type="date" id="fecha_captura" name="fecha_captura" required class="inputB"><br><br>

            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required class="inputB"><br><br>

            <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
            <input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required class="inputB"><br><br>

            <label for="lugar_procedencia">Lugar de Procedencia:</label>
            <input type="text" id="lugar_procedencia" name="lugar_procedencia" required class="inputB"><br><br>

            <label for="EstadoCivil">Estado Civil:</label>
            <select id="EstadoCivil" name="EstadoCivil">
                <option value="Soltero">Soltero</option>
                <option value="Casado">Casado</option>
                <option value="Divorciado">Divorciado</option>
                <option value="Viudo">Viudo</option>
            </select><br><br>

            <label for="domicilio">Domicilio:</label>
            <textarea id="domicilio" name="domicilio" required class="inputB"></textarea><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required class="inputB"><br><br>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required class="inputB"><br><br>

            <input type="submit" value="Enviar" class="btncolor">
        </form>
    </section>
</body>
</html>