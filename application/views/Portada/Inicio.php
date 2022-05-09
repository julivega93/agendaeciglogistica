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
            <div class="col-lg-2" id="menu">
                <div class="card bg-light shadow" >
                    <div class="card-body p-2 text-center mt-3 mb-3 rounded">
                        <h3>Agenda personal</h3>
                        <h4 class="text-muted">Ecig Logística</h4>
                    </div>
                </div>
            </div>
            
            <?php if(count($eventos)){?>
                <div class="col-lg-10 row">

            <?php foreach($eventos as $e){?>
                <div class="col-lg-4" id="content">    
                    
                        <?php if($e['fecha'] < date('Y-m-d') ){ ?>
                                <div class="card text-center mb-3 bg-warning">
                        <?php }else{ ?>
                                <div class="card text-center mb-3">
                        <?php } ?>
                                <div class="card card-header h3"><?php echo $e['nombre'] ?></div>
                                <div class="card card-body"><?php echo $e['descripcion'] ?></div>
                                <div class="card card-footer text-muted"><?php echo $e['fecha'] ?></div>
                                <div class="card card-footer text-muted"><?php echo $e['hora'] ?></div>
                        </div>
                    
                </div>
            <?php } 
            }else{ ?>
            <span>No hay registros</span>
            <?php } ?>
            </div>
	</div>
</div>

</body>
</html>