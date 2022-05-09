<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Agenda Ecig</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-12">		
            <h1 class="text-center">EDITAR EVENTO SELECCIONADO</h1>

            <?php if(count($evento)){?>
                <table class="table table-hover table-bordered table-light table-striped text-center">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha </th>
                    <th scope="col">Hora</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <?php foreach($evento as $e){?> 
                    <form action="<?php echo site_url('Eventos/editarEvento/'.$e['id'])?>" method="post">
                <tbody>
                    <tr>
                    <td><input id="nombre" name="nombre" type="text" value="<?php echo $e['nombre'] ?>"></td>
                    <td><input id="descripcion" name="descripcion" type="text" value="<?php echo $e['descripcion'] ?>"></td>
                    <td><input id="fecha" name="fecha" type="date" value="<?php echo $e['fecha']?>"></td>
                    <td><input id="hora" name="hora" type="time" value="<?php echo $e['hora']?>"></td>
                    <td>
                        <button type="submit" class="btn btn-lg btn-success editar">CONFIRMAR CAMBIOS</a>
                    </td>
                    </tr>
                </tbody>
                </form>
                <?php } ?>
                </table>
            <?php }?>
            <a href="<?php echo site_url('Eventos/listarEventos')?>" class="btn btn-secondary">Volver</a>
        </div>
	</div>
</div>



 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>

    </script>
</body>
</html>