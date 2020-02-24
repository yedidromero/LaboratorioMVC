<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>::COLEGIO LOS PATITOS CONTENTOS ::.</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">REGISTRAR NUEVO ALUMNO</h1>
        <br> <br>
<p class= "center">
Introduzca los datos del alumno a registrar para el siguiente ciclo escolar 2020 - 2021 </p>
<p class= "center">Al finalizar, dar clic en el <b>botón inferior derecho</b> de Crear nuevo alumno</p>
<br> <br> <br>

        <form action="<?php echo constant('URL'); ?>nuevo/crear" method="POST">
<table width="120%" border="0" style="margin-left: -19%">
  <tr>
    <td><label for="">CURP</label></td>
    <td><input type="text" name="curp" id="" required></td>
    <td>&nbsp;</td>
    <td><label for="">Nombre</label></td>
    <td><input type="text" name="nombre" id="" required></td>
  </tr>
  <tr>
    <td><label for="">Fecha de Nacimiento</label></td>
    <td><input type="date" name="nacimiento" id="" required></td>
    <td>&nbsp;</td>
    <td><label for="">Nombre del tutor</label></td>
    <td><input type="text" name="tutor" id="" required></td>
  </tr>
  <tr>
    <td><label for="">Dirección</label></td>
    <td><input type="text" name="direccion" id="" required></td>
    <td>&nbsp;</td>
    <td><label for="">Teléfono</label></td>
    <td><input type="text" name="telefono" id="" required></td>
  </tr>
  <tr>
    <td><label for="">Año nuevo a cursar</label></td>
    <td><input type="text" name="gradonuevo" id="" required></td>
    <td>&nbsp;</td>
    <td><label for="">Promedio</label></td>
    <td><input type="text" name="promedio" id="" required></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Crear nuevo alumno"></td>
  </tr>
</table>      
        </form>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>