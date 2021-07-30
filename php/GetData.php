<?php
include 'conex.php';
}
  if (!empty($_POST)) {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM bombillos';
    $q = $pdo->prepare($sql);
    $q->execute();
    while ($fila = $q->fetch(PDO::FETCH_ASSOC)) {
      $datos []= $fila['valor'];
    }
    echo $datos[0];
    echo $datos[1];
    echo $datos[2];
    echo $datos[3];
    echo $datos[4];
  }
?>