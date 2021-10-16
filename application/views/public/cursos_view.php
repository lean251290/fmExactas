<br><br>
<div class="imagen-curso">
<div class="d-none d-md-block text-center">
	<img class="img-fluid imagenc" src="<?php echo base_url ('assets/img/carreras.png'); ?>">
</div>
</div>
<div class="d-md-none imagen-curso2 text-center">
	<img class="img-fluid" src="<?php echo base_url ('assets/img/carreras.png'); ?>">
</div>
<br>

<div class="container-fluid contenedorCurso2 wow slideInUp">
	<div class="row d-flex flex-wrap justify-content-around mb-4">
		<?php foreach ($carreras as $carrera):?>

					<div class="col-md-4 mb-4">

					<div class="card miCard text-center">
						<div class="container tituloTarjeta">
							<h4 id="tituloTarjeta"><?=$carrera->nombre;?></h4>
						</div>
						<div class="container contenedor-imagen">
						<img clas="img-fluid" src="<?=base_url($carrera->img)?>" style="width: 250px; height: 225px; border-radius: 300px">
						</div>

						<p class="descripcionMaterias"><?=$carrera->descripcion;?></p>

						<div class="container pie-tarjeta">
							<a class="btn botonMio" href="<?=base_url('detalle/'.$carrera->id.'/0');?>">Ver materias...</a>
						<hr>
						</div>

					</div>
				</div>

			<?php endforeach;?>
		</div>
</div>

<?=$this->pagination->create_links()?>







