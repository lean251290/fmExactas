<br>
<br>
<br>
<div class="container text-center">
  <h1>Dejanos un mensaje</h1>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-8 col-xs-12">
      <form action="<?=base_url('Home/contacto');?>" method="post" class="form-group" enctype="multipart/form-data">
        <div class="form-group">
          <hr>
          <?php echo '<p class=bg-danger>'.form_error('nombre').'</p>'; ?>
          <label for="Nombre">Nombre</label>
          <input type="input" name="nombre" value="<?=set_value("nombre");?>" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
        </div>
        <div class="form-group">
          <hr>
          <?php echo '<p class=bg-danger>'.form_error('apellido').'</p>'; ?>
          <label for="Apellido">Apellido</label>
          <input type="input" name="apellido" value="<?=set_value("apellido");?>" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
        </div>
        <div class="form-group">
          <hr>
          <?php echo '<p class=bg-danger>'.form_error('telefono').'</p>'; ?>
          <label for="Teléfono">Teléfono</label>
          <input type="input" name="telefono" value="<?=set_value("telefono");?>" class="form-control" id="exampleFormControlInput1" placeholder="Teléfono">
        </div>


        <div class="form-group">
          <hr>
          <p>Atención!!! Los mensajes tienen un máximo de 250 carácteres!!!</p>
          <?php echo '<p class=bg-danger>'.form_error('mensaje').'</p>'; ?>
          <label for="Mensaje">Mensaje...</label>
          <textarea type="input" name="mensaje" value="<?=set_value("mensaje");?>" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <hr>
        <button class="btn my-2 my-sm-0 botonMio" data-toggle="modal" data-target="#confirmacionMensaje" style="background-color: rgb(245, 113, 36, 0.9);" type="submit" value="submit">Enviar Mensaje</button>
      </form>

      <br>
    </div>

    <div class="col-lg-4 col-xs-12 text-center wow rubberBand">


      <img class="img-fluid mx-auto imagenlogo" src="<?=base_url('assets/img/logofm.jpg');?>" style="width: 300px;" > 
   </div>

 </div>


</div>
<!-- mensaje enviado modal-->
<div class="modal fade" id="confirmacionMensaje" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mensaje eviado con Éxito!!!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="<?=base_url('assets/img/msjexito.png');?>" style="border-radius: 150px">
      </div>
      <div class="modal-footer">
        <!-- ACA VA UN BOTON -->
      </div>
    </div>
  </div>
</div>


