<br><br>
<br>
<br>
<br>
<br>
<br>
<h1 class="letra-archivos text-center">Archivos de <?= $materia->nombre;?></h1>

<div class="container-fluid text-center">


	<br><br>
	<div class="container-fluid contenedorCurso2 wow fadeInUp">
		<div class="row d-flex flex-wrap justify-content-around mb-4">
			<?php if (empty($materia->archivos)): ?>
					<div class="container">
						<h1><strong>No se arrojaron resultados.</strong></h1>
					</div>
					<?php else: ?>
			<?php foreach ($materia->archivos as $archivo):?>
				<?php if ($archivo->eliminado_flag == 1): ?>
					<div class="col-md-2 mb-4">
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
								<?php if (($this->session->userdata('logged_in')) && ($this->session->userdata['perfil_id'] == 1)): ?>
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
			<?php endif;?>
		</div>
	</div>
	<?php if ($this->session->userdata('logged_in')): ?>

	<a class="btn botonMio" style="background-color: #FF8000;" href="<?=base_url('Documentos_controller/subirDocumento/'.$materia->id);?>">Agregar Archivo</a>
	<br>

	<?php endif;?>
	<form action="<?=base_url('carreras/detalle/'.$carrera->idcarrera.'/0');?>" enctype="multipart/form-data">
                  <button class="btn botonMio" style="background-color: #FF8000;" type="submit">Volver</button>
                  <hr>
                </form>

</div>

<div class="container">
    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
</div>

<script>

 $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
