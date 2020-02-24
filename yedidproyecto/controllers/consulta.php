<?php

class Consulta extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje = "";
    }

    function render(){
        $alumnos = $this->view->datos = $this->model->get();
        $this->view->alumnos = $alumnos;
        $this->view->render('consulta/index');
    }

    function verAlumno($param = null){
        $idAlumno = $param[0];
        $alumno = $this->model->getById($idAlumno);

        session_start();
        $_SESSION["id_verAlumno"] = $alumno->curp;

        $this->view->alumno = $alumno;
        $this->view->render('consulta/detalle');
    }

    function actualizarAlumno($param = null){
        session_start();
        $curp = $_SESSION["id_verAlumno"];
        $nombre    = $_POST['nombre'];
        $gradonuevo  = $_POST['gradonuevo'];
        $telefono = $_POST['telefono'];
        $tutor = $_POST['tutor'];
        $promedio = $_POST['promedio'];
        $direccion = $_POST['direccion'];
        $nacimiento = $_POST['nacimiento'];

        unset($_SESSION['id_verAlumno']);

        if($this->model->update(['curp' => $curp, 'nombre' => $nombre, 'gradonuevo' => $gradonuevo, 'telefono' => $telefono, 'tutor' => $tutor, 'promedio' => $promedio, 'direccion' => $direccion, 'nacimiento' => $nacimiento])){
            $alumno = new Alumno();
            $alumno->curp = $curp;
            $alumno->nombre = $nombre;
            $alumno->gradonuevo = $gradonuevo;
            $alumno->telefono = $telefono;
            $alumno->tutor = $tutor;
            $alumno->promedio = $promedio;
            $alumno->direccion = $direccion;
            $alumno->nacimiento = $nacimiento; 

            $this->view->alumno = $alumno;
            $this->view->mensaje = "Alumno actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al alumno";
        }
        $this->view->render('consulta/detalle');
    }

    function eliminarAlumno($param = null){
        $curp = $param[0];

        if($this->model->delete($curp)){
            $this->view->mensaje = "Alumno eliminado correctamente";
        }else{
            $this->view->mensaje = "No se pudo eliminar al alumno";
        }
        $this->render();
    }
}

?>