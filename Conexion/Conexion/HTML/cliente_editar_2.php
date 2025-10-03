<?php
include "..\PHP\conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM cliente WHERE IDCliente=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://jose-angel-lopez-rocha.github.io/web/Conexion/CSS/formularios.css" rel="stylesheet">
    <title>Edicion de Clientes</title>
</head>
<body>
    <h1 class="titulo">Edicion de Clientes</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>
    <?php
    while($mostrar=$sql->fetch_object()){?>
    <div class="centro">
    <form>
        <ul>
        <li>
            <label>Nombre:</label>
            <input type="text" value="<?=$mostrar->Nombre?>">
        </li>
        <li>
            <label>Apellido paterno:</label>
            <input type="text" value="<?=$mostrar->Ap_Paterno?>">
        </li>
        <li>
            <label>Apellido materno:</label>
            <input type="text" value="<?=$mostrar->Ap_Materno?>">
        </li>
        <li>
            <label>Email:</label>
            <input type="email" value="<?=$mostrar->Email?>">
        </li>
        <li>
            <label>Clave:</label>
            <input type="password" value="<?=$mostrar->Clave?>">
        </li>
        <li>
            <label>Teléfono:</label>
            <input type="tel" value="<?=$mostrar->Telefono?>">
        </li>
        <li>
            <label>Ciudad:</label>
            <input type="text" value="<?=$mostrar->Ciudad?>">
        </li>
        <li>
            <label>Fecha de nacimiento:</label>
            <input type="date" value="<?=$mostrar->Fecha_Nacimiento?>">
        </li>
        <li>
            <label>Estado:</label>
            <select name="estado" id="estado">
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option> 
            <option value="Chihuahua">Chihuahua</option>
            <option value="Coahuila">Coahuila</option> 
            <option value="Colima">Colima</option> 
            <option value="Durango">Durango</option> 
            <option value="Guanajuato">Guanajuato</option> 
            <option value="Guerrero">Guerrero</option> 
            <option value="Hidalgo">Hidalgo</option> 
            <option value="Jalisco">Jalisco</option> 
            <option value="Estado de Mexico">Estado de Mexico</option> 
            <option value="Michoacan">Michoacan</option> 
            <option value="Morelos">Morelos</option> 
            <option value="Nayarit">Nayarit</option> 
            <option value="Nuevo Leon">Nuevo Leon</option> 
            <option value="Oaxaca">Oaxaca</option> 
            <option value="Puebla">Puebla</option> 
            <option value="Queretaro">Queretaro</option> 
            <option value="Quinta Roo">Quinta Roo</option> 
            <option value="San Luis Potosi">San Luis Potosi</option> 
            <option value="Sinaloa">Sinaloa</option> 
            <option value="Sonora">Sonora</option> 
            <option value="Tabasco">Tabasco</option> 
            <option value="Tamaulipas">Tamaulipas</option> 
            <option value="Tlaxcala">Tlaxcala</option> 
            <option value="Veracruz">Veracruz</option> 
            <option value="Yucatan">Yucatan</option> 
            <option value="Zacatecas">Zacatecas</option>
            </select>
        </li>
        </ul>
        <button type="submit" class="boton2">Confirmar</button>
    </form>
    </div>
    <?php }
    ?>

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
        <a href="https://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=https%3A%2F%2Fjose-angel-lopez-rocha.github.io%2Fweb%2FConexion%2FCSS%2Fformularios.css&usermedium=all&vextwarning=&warning=1">
            <img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!">
        </a>
    </p>
    <p>
        <a href="https://jigsaw.w3.org/css-validator/validator?lang=en&profile=css3svg&uri=https%3A%2F%2Fjose-angel-lopez-rocha.github.io%2Fweb%2FConexion%2FCSS%2Fformularios.css&usermedium=all&vextwarning=&warning=1">
            <img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!">
        </a>
    </p>      
</footer>
</body>
</html>