<?php 
require_once 'Conexion.php';

class Animal extends Conexion{
    private $conexion;

    public function __construct(){
        $this->conexion = parent::getConexion();
    }

    public function listar(): array{
        try{
            $sql="
            SELECT idanimal, idpersona, especie, sexo, condicion, rescate, lugar 
            FROM animales
            ORDER BY idanimal DESC";
        
            $consulta= $this->conexion->prepare($sql);   
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            return [];
        }
    }

    public function agregar($registro=[]){
        try{
            $sql="
            INSERT INTO animal
            (idpersona, especie,sexo,condicion,rescate,lugar)
            VALUES(?,?,?,?,?,?) 
            ";
            $consulta= $this->conexion->prepare($sql);
            $consulta->execute(
                array(
                    $registro['idpersona'],
                    $registro['especie'],
                    $registro['sexo'],
                    $registro['condicion'],
                    $registro['rescate'],
                    $registro['lugar']
                )
            );
        }catch(Exception $e){

        }
    }
}