<?php if($this->session->userdata('logged_in')): ?>

	<br>
	<br>
	<br>
<h1 class="text-right bienvenido" style="color: orange">Bienvenido <?= $this->session->userdata('username');?></h1>
<div class="container-fluid">
	<hr>
	<h1 class="text-left">Panel de Administracion</h1>
	<hr>
</div>
<section>
	<div class="row secccionadmin">
		<div class="container col-lg-4">
	<ul class="list-group">
  <a href="<?=base_url()?>Home/subirDocumentoSinId"><li class="list-group-item">Subir Archivos</li></a>
  <a href="<?=base_url()?>Home/subirContenido"><li class="list-group-item">Subir Eventos</li></a>
  <a href="#"><li class="list-group-item">Ultimos Eventos Agregados</li></a>
  <a href="#"><li class="list-group-item">Ultimos Archivos Agregados</li></a>
</ul>
</div>
<div class="container col-lg-6">
	<p>
		En esta sección podes subir tus eventos, com asi tmbien podes subir los archivos que desees, tambien dejamos un seccion para que puedas ver los ultimos eventos que agregaste y los archivos que agregaste.
		Atte: Los desarrolladores.
	</p>
</div>
</div>
</section>

 <br>
<br>
<div class="container">


<div class="list-group w-100">
      <div class="list-group-item">
        <div class="row">
          <div class="col text-left" style="color:black; font-size: 30px">Nombre</div>
          <div class="col text-left" style="color:black; font-size: 30px">Teléfono</div>
          <div class="col text-left" style="color:black; font-size: 30px">Mensaje</div>
          <div class="col text-left" style="color:black; font-size: 30px">Confirmar Lectura</div>
        </div>
      </div>

<?php foreach($consultas as $consulta): ?>
  <?php if($consulta->estado == 1): ?> 
 <div class="list-group-item mi-item mi-list-group-item pt-2 pb-2 mi-cont">
        <div class="row">
          <div class="col mi-col-item-dark text-left" style="color:black; font-size: 25px"><?=$consulta->nombre;?></div>
          <div class="col mi-col-item-dark text-left" style="color:black; font-size: 25px"><?=$consulta->telefono;?></div>
          <div class="col mi-col-item-dark text-left" style="color:black; font-size: 25px"><?=$consulta->mensaje;?></div>
          <div class="col mi-col-item-dark text-left" style="color:black; font-size: 25px">

            <div class="col text-center">
			<form action="<?=base_url('Home/mensajeLeido');?>" method="post">
          	    <button type="submit" name="leido" value="<?=$consulta->id_mensaje;?>" class="btn botonMio" style="background-color: rgba(245, 113, 36, 0.9);">Leido</button>
          	</form>
		</div>
          </div>

        </div>
      </div>  
<?php endif;?>
<?php endforeach;?> 

</div>
</div>
<br>
<br>
<br>
<br>

<?php endif;?>
<br><br>
