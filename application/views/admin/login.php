
	<br>
<br><br>
<div class="modal-dialog text-center wow fadeInUp">
	<div class="col-sm-8 main-section">
		<div class="modal-content">
			<div class="col-12 user-img wow rubberBand">
			<img src="<?=base_url('assets/img/icono_login.png');?>">
			</div>
			<?php echo '<p class=bg-danger>'.$this->session->flashdata('msg').'</p>'; ?>
			<form class="col-12" id="formLogin" action="<?php echo base_url();?>Users/login" method="POST">
				<?php echo '<p class=bg-danger>'.form_error('user').'</p>'; ?>
				<div class="form-group form-group2 wow bounceInLeft" id="user-group">
					<input type="text" name="user" value="<?=set_value('user');?>" class="form-control" placeholder="Nombre de ususario">
				</div>
				<!-- utlizar con input group asi puedo cargar los iconos -->
				<div class="form-group form-group2 wow bounceInRight" id="contra-group">
					<?php echo '<p class=bg-danger>'.form_error('pass').'</p>'; ?>
					<input type="password" name="pass" value="<?=set_value('pass');?>" class="form-control" placeholder="Contraseña">
				</div>

				<button type="butom" class="btn btn-primary botonMio wow shake"> <i class="fas fa-sign-in-alt"> </i> Ingresar </button>
			</form>
			
		</div>
	</div>
</div>
