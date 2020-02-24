<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Actualizar <?php echo $this->alumno->curp; ?></h1>
<br><br>
<p>

Cambie los datos que vea necesarios, una vez concluido, dar clic en <b>actualizar</b> en el botón gris del lado inferior derecho</p>
<br>
<br>

        <form action="<?php echo constant('URL'); ?>consulta/actualizarAlumno/" method="POST">

<table width="130%" border="0" style="margin-left: -19%" >
  <tr>
    <td width="22%"><label for="">CURP:</label></td>
    <td width="25%"><input type="text" disabled name="curp" id="" value="<?php echo $this->alumno->curp; ?>"></td>
    <td width="5%">&nbsp;</td>
    <td width="22%"><label for="">Nombre:</label><br></td>
    <td width="26%"><input type="text" name="nombre" value="<?php echo $this->alumno->nombre; ?>"></td>
  </tr>
  <tr>
    <td><label for="">Dirección:</label></td>
    <td><input type="text" name="direccion" value="<?php echo $this->alumno->direccion; ?>"></td>
    <td>&nbsp;</td>
    <td><label for="">Nombre del tutor:</label></td>
    <td><input type="text" name="tutor" value="<?php echo $this->alumno->tutor; ?>"></td>
  </tr>
  <tr>
    <td><label for="">Teléfono:</label></td>
    <td><input type="text" name="telefono" value="<?php echo $this->alumno->telefono; ?>"></td>
    <td>&nbsp;</td>
    <td><label for="">Fecha de nacimiento:</label></td>
    <td><input type="date"  name="nacimiento" value="<?php echo $this->alumno->nacimiento; ?>"></td>
  </tr>
  <tr>
    <td><label for="">Año a cursar:</label></td>
    <td><input type="text" name="gradonuevo" value="<?php echo $this->alumno->gradonuevo; ?>"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><label for="">Promedio escolar:</label></td>
    <td><input type="text" name="promedio" value="<?php echo $this->alumno->promedio; ?>"></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Actualizar registro"></td>
  </tr>
</table>
</form>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>