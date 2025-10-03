<?php
include "..\PHP\conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion del stock</title>
    <link href="https://jose-angel-lopez-rocha.github.io/web/Conexion/CSS/formularios.css" rel="stylesheet">
</head>
<body>
    <h1 class="titulo">Creacion del stock</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>
    <div class="centro">
    <form>
<ul>
    <li>
        <h5>Marca:</h5>
        <input type="text">
    </li>
    <li>
        <h5>Talla:</h5>
        <select name="talla">
            <option value="xs">XS</option>
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
        </select>
    </li>
    <li>
        <h5>Color:</h5>
        <input type="text">
    </li>
    <li>
        <h5>Precio:</h5>
        <input type="text">
    </li>
    <li>
        <h5>Stock:</h5>
        <input type="text">
    </li>
    <li>
        <h5>Categoría:</h5>
        <select name="Categoria">
            <option value="Deportivo">Deportivo</option>
            <option value="Casual">Casual</option>
            <option value="Formal">Formal</option>
        </select>
    </li>
</ul>
<button type="submit" class="boton1">Crear</button>
</form>
</div>
<footer class="footer">
        <h4>Información</h4>
        <ul>
            <li><a href="mailto:lopezrochaangel30@gmail.com">Enviar correo</a></li>    
        </ul>
        <p>
            <a href="https://validator.w3.org/">
            <img src="../imagenes/valid-html40.png" alt="Valid html" style="border:0;width:88px;height:31px">
            </a>
        </p>            
        <p>
            <a href="https://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="https://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!">
            </a>
        </p>
        <p>
            <a href="https://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="Valid CSS!">
            </a>
        </p>
    </footer>
</body>
</html>