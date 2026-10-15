<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Producto.php';

class ProductoController
{
    private $producto;

    public function __construct()
    {
        $database = new Database();
        $db = $database->getConnection();
        $this->producto = new Producto($db);
    }

    // GET /productos
    public function index()
    {
        require __DIR__ . '/../views/productos/index.php';
    }

    // GET /productos/crear
    public function crear()
    {
        require __DIR__ . '/../views/productos/crear.php';
    }

    // POST /productos
    public function guardar()
    {
        $nombre = trim($_POST['nombre'] ?? '');
        $precio = $_POST['precio'] ?? '';

        $this->producto->registrar($nombre, $precio);

        header('Location: /productos');
        exit;
    }
}
