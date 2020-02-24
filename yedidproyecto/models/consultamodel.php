<?php

require 'models/alumno.php';

class ConsultaModel extends Model{

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $elementos = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM alumnos');
            
            while($row = $query->fetch()){
                $elemento = new Alumno();
                $elemento->curp = $row['curp'];
                $elemento->nombre    = $row['nombre'];
                $elemento->gradonuevo  = $row['gradonuevo'];
                $elemento->telefono = $row['telefono'];
                $elemento->tutor = $row['tutor'];
                $elemento->promedio = $row['promedio'];
                $elemento->direccion = $row['direccion'];
                $elemento->nacimiento = $row['nacimiento'];

                array_push($elementos, $elemento);
            }
            return $elementos;
        }catch(PDOException $e){
            return [];
        }
    }

    public function getById($id){
        $elemento = new Alumno();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM alumnos WHERE curp = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                
                $elemento->curp = $row['curp'];
                $elemento->nombre    = $row['nombre'];
                $elemento->gradonuevo  = $row['gradonuevo'];
                $elemento->telefono = $row['telefono'];
                $elemento->tutor = $row['tutor'];
                $elemento->promedio = $row['promedio'];
                $elemento->direccion = $row['direccion'];
                $elemento->nacimiento = $row['nacimiento'];
            }
            return $elemento;
        }catch(PDOException $e){
            return null;
        }
    }

    public function update($elemento){
        $query = $this->db->connect()->prepare('UPDATE alumnos SET nombre = :nombre, gradonuevo = :gradonuevo, telefono = :telefono, tutor = :tutor, promedio = :promedio, direccion = :direccion, nacimiento = :nacimiento WHERE curp = :curp');
        try{
            $query->execute([
                'curp' => $elemento['curp'],
                'nombre' => $elemento['nombre'],
                'gradonuevo' => $elemento['gradonuevo'],
                'telefono' => $elemento['telefono'],
                'tutor' => $elemento['tutor'],
                'promedio' => $elemento['promedio'],
                'direccion' => $elemento['direccion'],
                'nacimiento' => $elemento['nacimiento']
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM alumnos WHERE curp = :curp');
        try{
            $query->execute([
                'curp' => $id
            ]);
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}
?>