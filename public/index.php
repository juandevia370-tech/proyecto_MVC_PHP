<?php

require_once __DIR__ . '/../controllers/ProductoController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER['REQUEST_METHOD'];

$controller = new ProductoController();

if ($uri === '/productos' && $metodo === 'GET') {
    $controller->index();
} elseif ($uri === '/productos/crear' && $metodo === 'GET') {
    $controller->crear();
} elseif ($uri === '/productos' && $metodo === 'POST') {
    $controller->guardar();
} else {
    http_response_code(404);
    echo '404 - Página no encontrada';
}
