<?php
    $conexion=mysqli_connect('localhost','root','','proyectopin2');   
    session_start();
    if(empty($_SESSION["usuario"])) {
        header("Location: index.html");
        exit();
    }
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/proyecto/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a class="menu-toggle"></a><a href="inicio.php" class="brand-logo">
                    <img src="/proyecto/img/logo.png" alt="" style="width: 150px; border-radius: 50%;">
                </a>
                
            </header>
            <nav class="dashboard-nav-list">
                <div class="nav-item-divider"></div>
                <a href="inicio.php" class="dashboard-nav-item"><i class="fas fa-home"></i>Inicio</a>
                <a href="estado.php" class="dashboard-nav-item"><i class="fas fa-clipboard-list"></i>Estado</a>
                <a href="intrruptores.php" class="dashboard-nav-item"><i class="fas fa-lightbulb"></i>Interruptores</a>
                <a href="consumo.php"class="dashboard-nav-item"><i class="far fa-chart-bar"></i>Consumo</a>
                <a href="#!"class="dashboard-nav-item"><i class="fas fa-video"></i>Camaras</a>
                <div class="nav-item-divider"></div>
                <a href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i>Cerrar sesion</a>
            </nav>
        </div>
        <div class='dashboard-app'>
            <header class='dashboard-toolbar'><a href="#" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
            <div class='dashboard-content'>
                <div class='container'>
                    <div class='card'>
                        <div class='card-body' style="border: 2px solid rgba(0, 0, 0, 0.125);">
                        <table class="table table-hover">
                        <thead>

                        <form action="update.php" method="post" id="sala_on">
                            <input type="hidden"  name="Sala" value="1"/>            
                        </form>                            
                        <form action="update.php" method="post" id="cocina_on">
                            <input type="hidden"  name="Sala" value="3"/>            
                        </form>   
                        <form action="update.php" method="post" id="hab1_on">
                            <input type="hidden"  name="Sala" value="5"/>            
                        </form> 
                        <form action="update.php" method="post" id="hab2_on">
                            <input type="hidden"  name="Sala" value="7"/>            
                        </form>  
                        <form action="update.php" method="post" id="hab3_on">
                            <input type="hidden"  name="Sala" value="9"/>            
                        </form>   
                        <form action="update.php" method="post" id="sala_off">
                            <input type="hidden"  name="Sala" value="0"/>
                        </form>
                        <form action="update.php" method="post" id="cocina_off">
                            <input type="hidden"  name="Sala" value="2"/>
                        </form>
                        <form action="update.php" method="post" id="hab1off">
                            <input type="hidden"  name="Sala" value="4"/>
                        </form>
                        <form action="update.php" method="post" id="hab2off">
                            <input type="hidden"  name="Sala" value="6"/>
                        </form>
                        <form action="update.php" method="post" id="hab3off">
                            <input type="hidden" name="Sala" value="8"/>
                        </form>

                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Ubicación</th>
                            <th scope="col">ON/OFF</th>
                        </tr>
                        </thead>
                        <?php
                            $query = mysqli_query($conexion, "SELECT * FROM bombillos");
                            if ($query) {
                                while ($row = $query->fetch_array()) {
                                    $estado[]=$row['estado'];
                                    $ubicacion[]=$row['ubicacion'];      
                        ?>
                        <tr>            
                        <?php
                        }
                    }
                    ?>  
                    <td>1</td>
                        <td><?php echo $estado[0]?></td>
                        <td><?php echo $ubicacion[0]?></td>
                        <td>
                        <button class="btn btn-outline-success" name= "subject" type="submit" form="sala_on" value="SubmitLEDON" >ON</button>
                        <button class="btn btn-outline-danger" name= "subject" type="submit" form="sala_off" value="SubmitLEDON" >OFF</button>
                        </td>
                    </tr>
                    <tr>
                    <td>2</td>
                        <td><?php echo $estado[1]?></td>
                        <td><?php echo $ubicacion[1]?></td>
                        <td>
                        <button class="btn btn-outline-success" name= "subject" type="submit" form="cocina_on" >ON</button>
                        <button class="btn btn-outline-danger"name= "subject" type="submit" form="cocina_off" >OFF</button>
                        </td>
                    </tr>
                    <tr>
                    <td>3</td>
                        <td><?php echo $estado[2]?></td>
                        <td><?php echo $ubicacion[2]?></td>
                        <td>
                        <button class="btn btn-outline-success" name= "subject" type="submit" form="hab1_on" value="SubmitLEDON">ON</button>
                        <button class="btn btn-outline-danger" name= "subject" type="submit" form="hab1off" value="SubmitLEDON">OFF</button>
                        </td>
                    </tr>
                    <tr>
                    <td>4</td>
                        <td><?php echo $estado[3]?></td>
                        <td><?php echo $ubicacion[3]?></td>
                        <td>
                        <button class="btn btn-outline-success" name= "subject" type="submit" form="hab2_on" value="SubmitLEDON" >ON</button>
                        <button class="btn btn-outline-danger" name= "subject" type="submit" form="hab2off" value="SubmitLEDON" >OFF</button>
                        </td>
                    </tr>
                    <tr>
                    <td>5</td>
                        <td><?php echo $estado[4]?></td>
                        <td><?php echo $ubicacion[4]?></td>
                        <td>
                        <button class="btn btn-outline-success" name= "subject" type="submit" form="hab3_on" value="SubmitLEDON" >ON</button>
                        <button class="btn btn-outline-danger" name= "subject" type="submit" form="hab3off" value="SubmitLEDON" >OFF</button>
                        </td>
                    </tr>    
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
    <script src="pag.js" id="rendered-js"></script>

</body>
</html>