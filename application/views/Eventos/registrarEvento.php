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

			<?php
				if($this->session->tempdata('exito')){ ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<i class="fa-solid fa-circle-check textx-success"></i>
						El registro ha sido <strong>agregado correctamente!</strong>
					</div>
					<a href="<?php echo site_url('Eventos/listarEventos')?>" class="btn btn-dark">Ver listado</a>
					<a href="<?php echo site_url('Eventos')?>" class="btn btn-info">Agregar nuevo evento</a>


			<?php }else{  ?>
		</div>		
<div class="col-lg-12">
	<div class="card shadow">
			<div class="card-header text-center">
				<h2>AGREGAR NUEVO EVENTO</h2>
			</div>
			<div class="card-body bg-light">
				<form method="post" action="<?php echo site_url('eventos/nuevoEvento')?>">
					
					<div class="mb-3">
					
						<label for="nombre" class="form-label">Nombre <span class="text-danger">*</span> </label>
						<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>">
						<?php echo form_error('nombre','<span class="error text-danger">', '</span><br>');?>
					</div>
					<div class="mb-3">
						<label for="descripcion" class="form-label">Descripción <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="descripcion" name="descripcion">
						<?php echo form_error('descripcion','<span class="error text-danger">', '</span><br>');?>
					</div>
					
					<div class="mb-3 ">
						<label for="fecha" class="form-label">Fecha <span class="text-danger">*</span></label>
						<input type="date" class="form-control" id="fecha" name="fecha">
						<?php echo form_error('fecha','<span class="error text-danger">', '</span><br>');?>
					</div>
					<div class="mb-3"> 
						<label for="fecha" class="form-label">Hora <span class="text-danger">*</span></label>
						<input type="time" class="form-control" id="hora" name="hora">
						<?php echo form_error('hora','<span class="error text-danger">', '</span><br>');?>
					</div>
					<button type="submit" class="btn btn-success w-100">Agregar evento</button>
				</form>
			</div>	
			</div>
	</div>
</div>			
		<?php } ?>
	</div>
</div>

</body>
</html>