
<br><br>
<br>
<h1 class="letra-archivos text-center">Planes de Estudio</h1>

<div class="container-fluid text-center">


	<br><br>
	<div class="container-fluid contenedorCurso2 wow fadeInUp">
		<div class="row d-flex flex-wrap justify-content-around mb-4">
			<?php foreach ($archivos as $archivo):?>
				<?php if($archivo->codigo_materia == 20):?>
					<div class="col-md-4 mb-4">
						<div class="card miCard-archivos text-center">
							<div class="container contenedorTitulo">
								<div class="contenedor-imagen-archivo">
									<h3><?=$archivo->titulo;?></h3>
								</div>
							</div>
							<div class="container">
								<img class="img-thumbnail" src="<?= base_url().$archivo->img;?>" style="width: 150px; height:auto;">
							</div>
							<div class="container tituloArchivo">
								<hr>
								<a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar <?= $archivo->titulo;?></a> 
								<hr>
							</div>
						</div>
					</div>
				<?php endif;?>		
			<?php endforeach;?>
		</div>
	</div>	
</div>