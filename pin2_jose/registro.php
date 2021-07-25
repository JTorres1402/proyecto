<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "proyectopin2";


$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("no hay conexion".mysqli_connect_error());
}


$nom = $_POST["nombre"];
$ape = $_POST["apellido"];
$iden = $_POST["ident"];
$correo = $_POST["correo"];
$dire = $_POST["dir"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];

if ($pass != $pass2) {
    echo "<script> 
    alert('Error, las contraseñas deben de ser iguales');
    window.location='registro.html' 
    </script>";
}


if ($nom == null and $pass == null) {

}else{
    $pass_fuerte = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO usuarios (nombre, apellido, identificacion, correo, direccion, contraseña) values  ('$nom', '$ape', '$iden', '$correo', '$dire', '$pass_fuerte')";
        if (mysqli_query($conn,$query)) {
        echo "
        <script> 
        alert('Registro realizado correctamente');
        window.location='inicio.html' 
        </script>";
        }
    }








