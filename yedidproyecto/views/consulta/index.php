<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>:: COLEGIO LOS PATITOS CONTENTOS::</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">ALUMNOS INSCRITOS 2020</h1>
<br><br>

<p class="center">

Para modificar los datos de los alumnos presionar ACTUALIZAR, al final de la fila de cada alumno.
<br><br>

Para eliminar un alumno simplemente presione ELIMINAR, al final de la fila de cada alumno.
<br><br>
        <table class="center" width="270%" id="tabla" style="margin-left: -79%;">
            <thead>
                <tr>
                    <th>CURP</th>
                    <th>Nombre</th>
                    <th>Año nuevo a cursar</th>
                    <th>Telefono</th>
                    <th>Nombre del tutor</th>
                    <th>Promedio escolar</th>
                    <th>Dirección</th>
                    <th>Fecha de nacimiento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody id="tbody-alumnos">
            
        <?php
            include_once 'models/alumno.php';
            foreach ($this->alumnos as $row) {
                $alumno = new Alumno();
                $alumno = $row;
        ?>
                <tr id="fila-<?php echo $alumno->curp; ?>">
                    <td><?php echo $alumno->curp; ?></td>
                    <td><?php echo $alumno->nombre; ?></td>
                    <td><?php echo $alumno->gradonuevo; ?></td>
                    <td><?php echo $alumno->telefono; ?></td>
                    <td><?php echo $alumno->tutor; ?></td>
                    <td><?php echo $alumno->promedio; ?></td>
                    <td><?php echo $alumno->direccion; ?></td>
                    <td><?php echo $alumno->nacimiento; ?></td>
                    <td><a href="<?php echo constant('URL') . 'consulta/verAlumno/' . $alumno->curp; ?>">Actualizar</a></td>
                   <td><a href="<?php echo constant('URL') . 'consulta/eliminarAlumno/' . $alumno->curp; ?>">Eliminar<br> </a> </td>
                    
                </tr>
        <?php } ?>
            </tbody>
        </table>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>