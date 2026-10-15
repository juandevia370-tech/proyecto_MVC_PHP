<?php

class Producto
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function registrar($nombre, $precio)
    {
        $sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':precio', $precio);

        return $stmt->execute();
    }
}
