<br>
<br>
<br>
<br>
<h1 class="text-center">Subir Documentos</h1>
<br>
<br>
<br>
<div class="container">
  <div class="container col-lg-4"></div>
  <div class="container col-lg-4">
    <form action="<?php echo base_url('Documentos_controller/subirDocumentoSinId');?>" method="post" enctype="multipart/form-data">
      <div  class="form-group">
        <label for="exampleFormControlInput1">Título</label>
        <input type="text" name="titulo" value="<?=set_value("titulo");?>" class="form-control" id="exampleFormControlInput1" placeholder="Título del documento">
      </div>
     
       <label for="exampleFormControlFile1">Seleccionar un documento</label>
       <input type="file" name="archivo" class="form-control-file" id="exampleFormControlFile1">
    
     <br><br>
     <button class="btn my-2 my-sm-0 botonMio" type="submit" value="submit" style="background-color: blue;">Subir Documento</button>
   </form>
 </div>
 <div class="container col-lg-4"></div>
</div>
</div>