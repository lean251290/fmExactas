<div class="container">
	<h1 class="text-left">
		<br>
		<br>
		<br>
		<?php echo $eventos->titulo
		 ?>
		 <hr>
	</h1>
	<br><br>
	<div class="container text-center d-md-block col-md-4">
<img class="img-fluid" src="<?php echo base_url().$eventos->ruta;?>" style="width: 400px; height: auto">

</div>
<br><br>
	<h3 class="text-center">
		<?php echo $eventos->descripcion
		 ?>
	</h3>
	<hr>
</div>
<div class="contenedor-boton-eventos text-center">
						<a class="btn botonMio" href="<?=base_url('Home/mostrarEventos');?>">Volver</a> 
						</div>