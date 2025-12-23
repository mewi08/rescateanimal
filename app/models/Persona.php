<?php

require_once 'Conexion.php';

class Persona extends Conexion{
    private $conexion;
    
    public function __construct(){
        $this->conexion = parent::getConexion();
    }

    public function listar(): array{
        try{
            $sql = "
            SELECT idpersona, dni, nombres, apellidos 
            FROM personas
            ORDER BY idpersona DESC";

            $consulta = $this->conexion->prepare($sql);
            
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            return [];
        }
    }

    public function agregar($registro=[]): int{
        try{
            $sql = "
            INSERT INTO personas (dni, nombres, apellidos) 
            VALUES (?,?,?)";

            $consulta = $this->conexion->prepare($sql);
            $consulta->execute(
                array(
                    $registro ['dni'],
                    $registro ['nombres'],
                    $registro ['apellidos'],
                )
            );
            return $consulta->rowCount();
        }catch(Exception $e){
            return -1;
        }
    }
    
    public function eliminar($id):int{
        try{
            $sql = "DELETE FROM personas WHERE idpersona = ?";

            $consulta = $this->conexion->prepare($sql);
            
            $consulta->execute(
                array($id)
            );
            return $consulta->rowCount();
        }catch(Exception $e){
            return -1;
        }
    }

    public function actualizar($registro = []){
        try{
            $sql="
            UPDATE personas SET
                dni = ?, 
                nombres = ?,
                apellidos = ?,
                updated = now()
            WHERE idpersona=? 
            ";
            $consulta = $this->conexion->prepare($sql);

            $consulta->execute(
                array(
                    $registro['dni'],
                    $registro['nombres'],
                    $registro['apellidos'],
                    $registro['idpersona']
                )
            );
            return $consulta->rowCount();
        }catch(Exception $e){
            return -1;
        }
    }
    public function buscar($id){
         try{
            $sql = "
            SELECT idpersona, dni, nombres, apellidos 
            FROM personas
            ORDER BY idpersona DESC";

            $consulta = $this->conexion->prepare($sql);
            
            $consulta->execute(
                array($id)                
            );

            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        }catch(Exception $e){
            return [];
        }
    }
}
