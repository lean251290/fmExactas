


<br><br>
<br>
<h1 class="letra-archivos text-center">Archivos del Centro de Estudiantes</h1>
<div class="container-fluid text-center wow flash">


	<br><br>
	<div class="container-fluid contenedorCurso2">
		<div class="row d-flex flex-wrap justify-content-around mb-4">
			<?php foreach ($archivos as $archivo):?>
				<?php if ($archivo->eliminado_flag == 1): ?>
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
								<a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: white" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar</a>
								<hr>
							</div>
							<div class="contenedor-boton-eliminar">
								<?php if ($this->session->userdata('logged_in') && (!$this->session->userdata['perfil_id'] == 0)): ?> 
								<form action="<?=base_url('Documentos_controller/Borrar');?>" method="post" enctype="multipart/form-data">
									<button name="borrar" class="btn botonMio" type="submit" value="<?=$archivo->id_documento;?>">Borrar</button>
									<hr>
								</form>

								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endif;?>
			<?php endforeach;?>
		</div>
	</div>	
</div>

