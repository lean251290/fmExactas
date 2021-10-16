<br><br>
<br><br>
<div class="imagen-eventos text-center">
	<img class="img-fluid" src="<?php echo base_url ('assets/img/baner.png'); ?>">
</div>
<br><br>
<h1 class="titulo-descripcion text-center">Eventos</h1>
<br>
<br>
<br>
<br>
<div class="container-fluid contenedorCurso2 wow fadeInUpBig">
	<div class="row d-flex flex-wrap justify-content-around mb-4">
			<?php foreach ($eventos as $key=>$evento):?>
				<div class="col-md-4 mb-4">
					<div class="card miCard text-center">
						<div class="contenedor-img-evento">
						<img class="img-fluid img-thumbnail imagen-evento" src="<?=base_url().$evento->ruta?>">
						</div>
						<h4 id="tituloTarjeta-eventos"><?=$evento->titulo;?></h4>
						<div class="contenedor-boton-eventos">
						<a class="btn botonMio" href="<?=base_url('Home/detalle/'.$evento->id_evento);?>">Leer mas...</a> 
						</div>
						<hr>
					</div>
			</div>
			<?php endforeach;?>	
		</div>

	</div>

	