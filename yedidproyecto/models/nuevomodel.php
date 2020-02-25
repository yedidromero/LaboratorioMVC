<?php

class NuevoModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){
        // insertar
        $query = $this->db->connect()->prepare('INSERT INTO ALUMNOS (curp, NOMBRE, gradonuevo, telefono, tutor, promedio, direccion, nacimiento) VALUES(:curp, :nombre, :gradonuevo, :telefono, :tutor, :promedio, :direccion, :nacimiento)');
        try{
            $query->execute([
                'curp' => $datos['curp'],
                'nombre' => $datos['nombre'],
                'gradonuevo' => $datos['gradonuevo'],
                'telefono' => $datos['telefono'],
                'tutor' => $datos['tutor'],
                'promedio' => $datos['promedio'],
                'direccion' => $datos['direccion'],
                'nacimiento' => $datos['nacimiento']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }  
    }
}

?>