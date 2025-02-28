<?php
//conexion a base de datos
$mysqli = require __DIR__ . "/db.php";
//construccion de sql para extraccion de informacion
$sql = "SELECT * FROM personas";

$personas = $mysqli->query($sql);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Practica 2</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <header>
        <h1>Unete al equipo!</h1>
        
        <p class="headerSubtext">pagamos con experiencia!</p>
    </header>
    <nav class="navegacion">
    
    <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"/></svg></a>

    <a href="pagina2.html"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M120-120v-560h160v-160h400v320h160v400H520v-160h-80v160H120Zm80-80h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 320h80v-80h-80v80Zm0-160h80v-80h-80v80Zm0-160h80v-80h-80v80Zm160 480h80v-80h-80v80Zm0-160h80v-80h-80v80Z"/></svg></a>

    <a href="practica2.php"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#48752C"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h168q13-36 43.5-58t68.5-22q38 0 68.5 22t43.5 58h168q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm0-80h560v-560H200v560Zm80-80h280v-80H280v80Zm0-160h400v-80H280v80Zm0-160h400v-80H280v80Zm200-190q13 0 21.5-8.5T510-820q0-13-8.5-21.5T480-850q-13 0-21.5 8.5T450-820q0 13 8.5 21.5T480-790ZM200-200v-560 560Z"/></svg></a>

    </nav>
    
    <!-- Inicio del formulario -->
    
    <form action="procesar-practica2.php" method="post">
        <p>Registro de voluntarios:</p>
        <img src="https://cdn.viewpoint.com/blog/2022/10/Ramping-Up-Construction-Workforce-Blog-CTA.jpg" alt="Imagen de ejemplo" width="550" height="350"><!-- Imagen de ejemplo -->
        <!-- Caja de texto -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><!-- Campo para ingresar texto -->
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido">
        
        <!-- Edad -->
        <label for="edad">Fecha de nacimiento</label>
        <input type="date" id="fechanac" name="fechanac">
         
        <!-- Lista desplegable -->
        <label for="pais">País:</label>
        <select id="pais" name="pais">
	        <option value="sel">Seleccione</option>
            <option value="mx">México</option>
            <option value="us">Estados Unidos</option>
            <option value="ca">Canadá</option>
            <option value="ch">China</option>
            <option value="jp">Japon</option>
        </select><!-- Lista de opciones para seleccionar un país -->


        <!-- Opciones (radio buttons) -->
        <div class="seccion-estudios">
            <p>Nivel de estudios:</p>
            <span>
                <input type="radio" id="Secundaria" name="estudios" value="Secundaria">
                <label for="Secundaria">Secundaria</label>
            </span>
                <span><input type="radio" id="Perparatoria" name="estudios" value="Perparatoria">
                <label for="Perparatoria">Perparatoria</label><!-- Opciones para seleccionar el género -->
            </span>
            <span>
                <input type="radio" id="Universidad" name="estudios" value="Universidad">
                <label for="Universidad">Universidad</label><!-- Opciones para seleccionar el género -->
            </span>
            <span>
                <input type="radio" id="Posgrado" name="estudios" value="Posgrado">
                <label for="Posgrado">Posgrado</label><!-- Opciones para seleccionar el género -->
            </span>
        </div>


        <!-- Botones -->
        <button type="submit">Enviar</button><!-- Botón para enviar el formulario -->
        <button type="reset">Restablecer</button><!-- Botón para restablecer el formulario -->

        
        

        <!-- Tabla -->
        <table border="3">
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>País</th>
                <th>Estudios</th>
            </tr>
            <?php foreach ($personas as $persona): ?>
                <?php
                    $fechaNacimiento = new DateTime($persona['fechanac']);
                    $hoy = new DateTime();
                    $edad = $hoy->diff($fechaNacimiento)->y; 
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($persona['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($edad); ?></td>
                    <td><?php echo htmlspecialchars($persona['pais']); ?></td>
                    <td><?php echo htmlspecialchars($persona['estudios']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table><!-- Tabla con datos de ejemplo -->

        <!-- Multimedia (imagen y video) -->
        
        <p>Video:</p>
        <video width="320" height="240" controls>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/yl06UTcOJ1I?si=EMpjk_Xc91PHNTrK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            Tu navegador no soporta el elemento de video.
        </video><!-- Video de ejemplo -->
    </form>
</body>
</html>

