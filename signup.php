<?php

  require 'conexion.php';

  $message = '';


  $sql =  "SELECT * FROM usuarios";
  $resultado $conexion->query($sql);

  if($resultado->num_rows >0){
    while ($row = $resultado ->fetch_assoc()){
        var_dump($row);
    }
  }
?>