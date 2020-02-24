<?php

class Realizado extends Controller{

    function __construct(){
        parent::__construct();
        
    }

    function nuevoAlumno(){
        $this->view->mensaje = "Un nuevo alumno se ha dado de alta correctamente";
        $this->view->render('realizado/index');
    }
}
?>