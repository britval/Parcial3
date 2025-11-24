<?php
// formulario.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Inscripción</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Formulario de Inscripción</h2>

    <form action="guardar.php" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Apellido:</label>
        <input type="text" name="apellido" required>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="">Seleccione</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select>

        <label>País de residencia:</label>
        <input type="text" name="pais" required>

        <label>Nacionalidad:</label>
        <input type="text" name="nacionalidad" required>

        <label>Tema Tecnológico que te gustaría aprender / correo / celular:</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="interes[]" value="IA"> IA</label>
            <label><input type="checkbox" name="interes[]" value="Robótica"> Robótica</label>
            <label><input type="checkbox" name="interes[]" value="Ciberseguridad"> Ciberseguridad</label>
            <label><input type="checkbox" name="interes[]" value="Programación Web"> Programación Web</label>
        </div>

        <label>Observaciones o consulta sobre el evento:</label>
        <textarea name="observacion"></textarea>

        <button type="submit">Enviar</button>
    </form>

    <footer>
        &copy; 2025 iTECH. All rights reserved.
    </footer>
</div>

</body>
</html>
