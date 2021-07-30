<?php
    $conexion=mysqli_connect('localhost','root','','proyectopin2');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boton.css">
    <link rel="stylesheet" href="pag.css">
    <title>Interruptores</title>
</head>
<body>
    <div id="sidebar" class="active">
        <div class="toggle-btn">
            <span><img src="menu.png" alt=""></span>
        </div>
        <ul>
            <li>
                <img src="logo.png" alt="User">
            </li>
            <li><a href="pag1.html">Inicio</a>        
            </li>
            <li><a href="">Estado</a></li>
            <li><a href="">Consumo</a></li>
            <li><a href="">Camaras</a></li>
        </ul>
        
    </div>

    <main class="">
        <div>
            
            <input class="l" type="checkbox" name="sala" id="sala">
            <label>Sala</label>
        </div>    
        <div>
            
            <input class="l" type="checkbox" name="cocina" id="cocina">
            <label >Cocina</label>
        </div>
        <div>
            
            <input class="l" type="checkbox" name="habitacion1" id="habitacion1">
            <label >Habitacion 1</label>
        </div>
        <div>
          <label for="test">
                <input class="l" type="checkbox" name="habitacion2" id="habitacion2">
                Habitacion 2
            </label> 
               
        </div>
        <div id="resp"></div>
    
    <script src="pag.js" charset="utf-8"></script>
    
</body>
</html>