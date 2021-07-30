<?php

function udate($Num,$estado,$id){
  $pdo = Database::connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE bombillos SET valor = ?, estado = ? WHERE id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($Num,$estado,$id));
  Database::disconnect();
}

include 'conex.php';
if (!empty($_POST)) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM bombillos';
    $q = $pdo->prepare($sql);
    $q->execute();
    $estado = "Apagado";
    while ($fila = $q->fetch(PDO::FETCH_ASSOC)) {
        $datos []= $fila['id'];
        $botones[]=$fila['valor'];
    }
    if ($botones[0]==1 or $botones[1]==3 or $botones[2]==5 or $botones[3]==7 or $botones[4]==9) {
        if ($datos[0]==1) {
          $Num = 0;
          $id = 1;
          udate($Num,$estado,$id);
        }
        if ($datos[1]==2) {
          $Num = 2; 
          $id = 2;
          udate($Num,$estado,$id);
        }
        if ($datos[2]==3) {
          $Num = 4;
          $id = 3;
          udate($Num,$estado,$id);
        }
        if ($datos[3]==4) {
          $Num = 6;
          $id = 4;
          udate($Num,$estado,$id);
        }
        if ($datos[4]==5) {
          $Num = 8;
          $id = 5;
          udate($Num,$estado,$id);
        }
        
        echo "<script>
        alert('Se han apagado todos los bombillos');
        window.location='estado.php' 
       </script>";

    }else{
        echo "<script> 
        alert('Todos bombillos se encuentra apagados');
        window.location='estado.php' 
        </script>";
    }
  }
?>