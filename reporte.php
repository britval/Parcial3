<?php
// reporte.php
require_once "conexion.php";

$db = (new Conexion())->conectar();

$datos = $db->query("SELECT * FROM inscrito ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Inscritos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Reporte de Inscritos</h2>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>País</th>
            <th>Nacionalidad</th>
            <th>Observación</th>
        </tr>
        <?php foreach ($datos as $fila): ?>
        <tr>
            <td><?php echo htmlspecialchars($fila['id']); ?></td>
            <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
            <td><?php echo htmlspecialchars($fila['apellido']); ?></td>
            <td><?php echo htmlspecialchars($fila['edad']); ?></td>
            <td><?php echo htmlspecialchars($fila['sexo']); ?></td>
            <td><?php echo htmlspecialchars($fila['pais']); ?></td>
            <td><?php echo htmlspecialchars($fila['nacionalidad']); ?></td>
            <td><?php echo nl2br(htmlspecialchars($fila['observacion'])); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="formulario.php">Volver al formulario</a></p>
</div>
</body>
</html>
