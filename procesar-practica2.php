<?php

// Incluir la configuración de la base de datos
$mysqli = require __DIR__ . "/db.php"; // Obtiene la conexión desde db.php

// Verificar si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asignar y limpiar los valores del formulario
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $apellido = isset($_POST['apellido']) ? trim($_POST['apellido']) : '';
    $pais = isset($_POST['pais']) ? $_POST['pais'] : '';
    $estudios = isset($_POST['estudios']) ? $_POST['estudios'] : '';
    $fechanac = isset($_POST['fechanac']) ? $_POST['fechanac'] :'';


    // Validar que los campos no estén vacíos y que se haya seleccionado un país
    if (empty($nombre) || empty($apellido) || $pais == 'sel' || empty($estudios) || empty($fechanac)) {
        die("Por favor, complete todos los campos correctamente.");
    }

    // Concatenar nombre completo
    $nombreCompleto = $nombre . " " . $apellido;

    // Insertar datos en la base de datos
    $sql = "INSERT INTO personas (nombre, pais, estudios, fechanac) VALUES (?, ?, ?, ?)";
    
    $stmt = $mysqli->stmt_init();

    if (!$stmt->prepare($sql)) {
        die("Error en la preparación de la consulta: " . $mysqli->error);
    }

    $stmt->bind_param("ssss", $nombreCompleto, $pais, $estudios, $fechanac);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Capturar los datos después de la inserción
        $result = $mysqli->query("SELECT nombre, pais, estudios, fechanac FROM personas");
        $personas = [];

        while ($row = $result->fetch_assoc()) {
            $personas[] = $row;
        }

        // Redirigir con los datos serializados en la URL
        header("Location: practica2.php?personas=" . urlencode(json_encode($personas)));
        exit;
    } else {
        die("Error al ejecutar la consulta: " . $mysqli->error . " " . $mysqli->errno);
    }
} else {
    die("Método de solicitud inválido.");
}
?>
