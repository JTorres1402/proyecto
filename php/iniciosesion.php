<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "proyectopin2";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("no hay conexion" . mysqli_connect_error());
}

$identi = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn, "SELECT * FROM usuarios WHERE identificacion = '$identi'");
$nr = mysqli_num_rows($query);
$buscar_pass = mysqli_fetch_array($query);


if ($query) {
    while ($row = $query->fetch_array()) {
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $passs = $row['contraseña'];
    }
}

if (($nr == 1)&&(password_verify($pass,$buscar_pass['contraseña']))) {
    session_start();
    $_SESSION["usuario"] = $buscar_pass;
    header("Location: inicio.php");  
}else{
    header("Location: /proyecto/index.html");
}
?>
