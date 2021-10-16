<br>
<br>
<br>
<br>
<h1>Subir Imagen</h1>
<div class="container">
  <div class="alert"><?php if(isset($errors)):?>
    <?=$errors;?>
  <?php endif;?>
  </div>
  <div class="container col-lg-4"></div>
  <div class="container col-lg-4">
    <form action="<?php echo base_url();?>Eventos_controller/subirimagen" method="post" enctype="multipart/form-data">
      <div  class="form-group">
        <?php echo '<p class=bg-danger>'.form_error('titulo').'</p>'; ?>
        <label for="exampleFormControlInput1">Título</label>
        <input type="text" name="titulo" value="<?=set_value("titulo");?>" class="form-control" id="exampleFormControlInput1" placeholder="Título del documento">
      </div>
      <div class="form-group">
        <?php echo '<p class=bg-danger>'.form_error('descripcionCorta').'</p>'; ?>
        <label for="exampleFormControlTextarea1">Añade une breve Descripción</label>
        <textarea type="text" name="descripcionCorta" value="<?=set_value("descripcionCorta");?>" class="form-control" id="exampleFormControlTextarea1" placeholder="Descripción" rows="3"></textarea>
      </div>


      <div class="form-group">
        <?php echo '<p class=bg-danger>'.form_error('descripcion').'</p>'; ?>
        <label for="exampleFormControlTextarea1">Descripción</label>
        <textarea type="text" name="descripcion" value="<?=set_value("descripcion");?>" class="form-control" id="exampleFormControlTextarea1" placeholder="Descripción" rows="3"></textarea>
      </div>
      <centro>
        <?php echo '<p class=bg-danger>'.form_error('archivo').'</p>'; ?>
       <label for="exampleFormControlFile1">Seleccionar una Imagen</label>
       <input type="file" name="archivo" class="form-control-file" id="exampleFormControlFile1">
     </centro>
     <br><br>
     <button class="btn my-2 my-sm-0 botonMio" type="submit" value="submit">Subir Imagen</button>
   </form>
 </div>
 <div class="container col-lg-4"></div>
</div>
</div>