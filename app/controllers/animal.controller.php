<?php
require_once '../models/Animal.php';
$animal = new Animal();

  switch($_POST['operacion']){
    case 'listar':
      $registros = $animal->listar();
      echo json_encode($registros);
      break;
    case 'registrar':
      //Algoritmo
      break;  
    case 'actualizar':
      //Algoritmo
      break;
    case 'eliminar':
      //Algoritmo  
      break;  
  }

