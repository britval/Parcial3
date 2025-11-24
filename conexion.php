<?php
// conexion.php
class Conexion {
    private $host = "localhost";
    private $db   = "inscripciones";
    private $user = "root";
    private $pass = "12345";

    public function conectar() {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->db;charset=utf8",
                           $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error en conexión: " . $e->getMessage();
            exit;
        }
    }
}
?>
