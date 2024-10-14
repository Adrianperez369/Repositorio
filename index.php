<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos a la Asignatura de Cloud Computing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
        // Información del alumno
        $nombreAlumno = "Angel Adrian Pérez Villanueva";
        $numControl = "19660201";
        $edad = 23;
        $carrera = "Ingeniería en Sistemas Computacionales";

        // Información de la escuela
        $nombreEscuela = "TecNM Campus Matehuala";
        $direccionEscuela = "Carretera 57 Km 5, Matehuala, San Luis Potosí, México";
        $numEstudiantes = 1550;
        $numDocentes = 60;

        // Presentación del alumno
        echo "<h1>Presentación del Alumno</h1>";
        echo "<p><strong>Nombre:</strong> $nombreAlumno</p>";
        echo "<p><strong>Número de Control:</strong> $numControl</p>";
        echo "<p><strong>Edad:</strong> $edad años</p>";
        echo "<p><strong>Carrera:</strong> $carrera</p>";

        // Presentación de la escuela
        echo "<h1>Presentación de la Escuela</h1>";
        echo "<p><strong>Nombre:</strong> $nombreEscuela</p>";
        echo "<p><strong>Dirección:</strong> $direccionEscuela</p>";
        echo "<p><strong>Número de Estudiantes:</strong> $numEstudiantes</p>";
        echo "<p><strong>Número de Docentes:</strong> $numDocentes</p>";
    ?>
</div>

</body>
</html>
