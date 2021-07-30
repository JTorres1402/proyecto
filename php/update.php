<?php     
  include 'conex.php';
  if (!empty($_POST)) {
    $Stat = $_POST['Sala'];
    if ($Stat== 0 or $Stat == 1) {
      $Num = $_POST['Sala'];
      $id = 1;
      if ($Stat == 1) {
        $estado = 'Encendido'; 
      }else{
        $estado = 'Apagado'; 
      }
    }
    if ($Stat == 2 or $Stat == 3) {
      $Num = $_POST['Sala'];
      $id = 2;
      if ($Stat == 3) {
        $estado = 'Encendido'; 
      }else{
        $estado = 'Apagado'; 
      }
    }
    if ($Stat == 4 or $Stat == 5) {
        $Num = $_POST['Sala'];
        $id = 3;
        if ($Stat == 5) {
          $estado = 'Encendido'; 
        }else{
          $estado = 'Apagado'; 
        }
      }
      if ($Stat == 6 or $Stat == 7) {
        $Num = $_POST['Sala'];
        $id = 4;
        if ($Stat == 7) {
          $estado = 'Encendido'; 
        }else{
          $estado = 'Apagado'; 
        }
      }
      if ($Stat == 8 or $Stat == 9) {
        $Num = $_POST['Sala'];
        $id = 5;
        if ($Stat == 9) {
          $estado = 'Encendido';
        }else{
          $estado = 'Apagado'; 
        }
      }

    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE bombillos SET valor = ?, estado = ? WHERE ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($Num,$estado,$id));
    Database::disconnect();
    header("Location: intrruptores.php");
    
  }
?>