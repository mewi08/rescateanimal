<?php
require_once '../models/Animal.php';
$animal = new Animal();

  switch($_POST['operacion']){
    case 'listar':
      $registros = $animal->listar();
      echo json_encode($registros);
      break;

    case 'registrar':
      $registro = [
        'idpersona' => $_POST['idpersona'],
        'nombre'    => $_POST['nombre'],
        'especie'   => $_POST['especie'],
        'sexo'      => $_POST['sexo'],
        'condicion'  => $_POST['condicion'],
        'fecharescate'=> $_POST['fecharescate'],
        'lugar'=> $_POST['lugar'],
        'observaciones'=> $_POST['observaciones'],
        'foto'=> $_POST['foto'],
      ];
    $idobtenido= $producto->registrar($registro);
    echo json_encode(["idanimal" => "idobtenido"]);
      break;  

    case 'actualizar':
       $registro = [
        'idpersona' => $_POST['idpersona'],
        'nombre'    => $_POST['nombre'],
        'especie'   => $_POST['especie'],
        'sexo'      => $_POST['sexo'],
        'condicion'  => $_POST['condicion'],
        'fecharescate'=> $_POST['fecharescate'],
        'lugar'=> $_POST['lugar'],
        'observaciones'=> $_POST['observaciones'],
        'foto'=> $_POST['foto'],
      ];
      $filasafectadas = $animal->actualizar($registro);
      echo json_encode(['filas'=> $filasafectadas]);
      break;

    case 'eliminar':
      $filasafectadas = $animal->eliminar(($id));
      echo json_encode(["filas"=>$filasafectadas]);
      //Algoritmo  
      break;  

    case 'buscarPorId':
      echo json_encode($animal->buscarPorId($_POST['idanimal']));
      break;  

    case 'buscarPorCondicion':
      echo json_encode($animal->buscarPorcondicion($_POST['condicion']));
      break;

    case 'buscarPorEstado':
      echo json_encode($animal->buscarPorEstado($_POST['estado']));
  }

