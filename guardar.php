<?php
// guardar.php
require_once "conexion.php";

$conexion = new Conexion();
$db = $conexion->conectar();

// Validaciones básicas del lado de PHP
if (empty($_POST['nombre']) || empty($_POST['apellido'])) {
    die("Nombre y apellido son obligatorios.");
}

$nombre       = trim($_POST['nombre']);
$apellido     = trim($_POST['apellido']);
$edad         = (int) $_POST['edad'];
$sexo         = $_POST['sexo'];
$pais         = trim($_POST['pais']);
$nacionalidad = trim($_POST['nacionalidad']);
$observacion  = trim($_POST['observacion'] ?? '');

// Insertar inscrito
$sql = $db->prepare("
    INSERT INTO inscrito(nombre, apellido, edad, sexo, pais, nacionalidad, observacion)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");

$sql->execute([$nombre, $apellido, $edad, $sexo, $pais, $nacionalidad, $observacion]);

$id_inscrito = $db->lastInsertId();

// Insertar intereses si existen
if (!empty($_POST['interes']) && is_array($_POST['interes'])) {
    $stmt = $db->prepare("INSERT INTO intereses(id_inscrito, interes) VALUES (?, ?)");
    foreach ($_POST['interes'] as $item) {
        $stmt->execute([$id_inscrito, $item]);
    }
}

echo "<p>Datos guardados correctamente.</p>";
echo '<p><a href="reporte.php">Ver reporte</a></p>';
echo '<p><a href="formulario.php">Volver al formulario</a></p>';
?>

