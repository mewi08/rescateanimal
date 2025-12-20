<?php
require_once '../models/Persona.php';
$persona = new Persona();

  switch($_POST['operacion']){
    case 'listar':
      $registros = $persona->listar();
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

