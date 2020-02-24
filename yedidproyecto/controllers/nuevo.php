<?php

class Nuevo extends Controller{


    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
        
    }

    function render(){
        $this->view->render('nuevo/index');
    }

    function crear(){
        $curp = $_POST['curp'];
        $nombre    = $_POST['nombre'];
        $gradonuevo  = $_POST['gradonuevo'];
        $telefono = $_POST['telefono'];
        $tutor = $_POST['tutor'];
        $promedio = $_POST['promedio'];
        $direccion = $_POST['direccion'];
        $nacimiento = $_POST['nacimiento'];

        if($this->model->insert(['curp' => $curp, 'nombre' => $nombre, 'gradonuevo' => $gradonuevo, 'telefono' => $telefono, 'tutor' => $tutor, 'promedio' => $promedio, 'direccion' => $direccion, 'nacimiento' => $nacimiento])){
            $this->view->mensaje = "Un nuevo alumno se ha dado de alta correctamente";
            $this->view->render('nuevo/index');
        }else{
            $this->view->mensaje = "Este CURP, ya existe en el sistema";
            $this->view->render('nuevo/index');
        }
    }

}

?>