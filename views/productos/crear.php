<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear producto</title>
</head>
<body>
    <h1>Registrar producto</h1>

    <form action="/productos" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre del producto">
        </div>

        <div>
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" step="0.01" placeholder="Ingrese el precio del producto">
        </div>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
