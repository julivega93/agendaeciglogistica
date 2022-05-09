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
            <h1 class="text-center">LISTADO DE EVENTOS</h1>

            <?php if(count($eventos)){?>
                <table class="table table-hover table-bordered table-light table-striped text-center">
                <thead>
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Fecha | Hora</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <?php foreach($eventos as $e){ ?> 
                <tbody>
                    <?php if($e['fecha'] < date('Y-m-d')){ ?>
                        <tr class="text-decoration-line-through">
                    <?php }else{ ?>
                        <tr>
                    <?php } ?>
                    <td><?php echo $e['nombre'] ?></td>
                    <td><?php echo $e['descripcion'] ?></td>
                    <td><?php echo $e['fecha']?> | <?php echo $e['hora']?></td>
                    <td>
                        <a href="<?php echo site_url('Eventos/obtenerEvento/'.$e['id'])?>" class="editar"><i class="fa-solid fa-pen-to-square text-info"></i></a> 
                        <a href="<?php echo site_url('Eventos/eliminarEvento/'.$e['id'])?>" class="borrar"><i class="fa-solid fa-trash text-danger"></i></a>                     </td>
                    </tr>
                </tbody>
                <?php } ?>
                </table>
            <?php }else{ ?>
                <h2 class="text-center bg-warning rounded p-3">No hay eventos para mostrar</h2>
            <?php } ?>
            <div class="alert alert-danger d-none" role="alert">Estas seguro que desea borrar?
                <a href="" class="submit btn btn-warning">Aceptar</a>
                <a href="" class="cancel btn btn-sm btn-secondary">Cancelar</a>
            </div>
        </div>
	</div>
</div>


 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
        $(".borrar").click(function(e){
            e.preventDefault();
            $('.alert').removeClass('d-none');
            var direction=$(this).attr("href");
                console.log(direction);
                $("a.submit").attr("href",direction);
        })

        $(".cancel").click(function(e){
            $('.alert').addClass('d-none');
        })
    </script>
</body>
</html>