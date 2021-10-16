

<br>
<br>
<br>
<br>
<br>

    <br><br>
<div class="container-fluid text-center">
<h1 class="titulo-descripcion">Materias de <?= $carrera[0]->nombre;?> </h1>
</div>
<br><br>
<div class="container-fluid contenedorCurso2 wow fadeInUp">
  <div class="row d-flex flex-wrap justify-content-around mb-4">
    <?php foreach ($materias as $materia):?>

          <div class="col-md-4 mb-4">
          
          <div class="card miCard text-center">
            <div class="container tituloTarjeta">
              <h4 id="tituloTarjeta"><?=$materia->nombre;?></h4>
            </div>
            <div class="container contenedor-imagen">
            <img clas="img-fluid" src="<?=base_url('assets/img/word-pdf.jpg')?>" style="width: auto; height: 175px; border-radius: 25px;">
            </div>
            
            <!--<p><?=$carrera->descripcion;?></p> -->
            
            
            <div class="container pie-insertarArchivos">
              <a class="btn botonMio" href="<?php echo base_url('verArchivos/'. $materia->id);?>">Ver Archivos...</a>
            <hr>
            </div>
          </div>
        </div>
      
      <?php endforeach;?> 
    </div>
</div>

<div class="container text-center">
<form action="<?=base_url('carreras');?>" value="$materia->id" method="post" enctype="multipart/form-data">
                  <button class="btn botonMio" style="background-color: #FF8000;" type="submit">Volver</button>
                  <hr>
                </form>
    </div>

<br>
<?= $this->pagination->create_links()?>
