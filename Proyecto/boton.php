
<?php
    
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "proyectopin2";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("no hay conexion" . mysqli_connect_error());
}




?>
