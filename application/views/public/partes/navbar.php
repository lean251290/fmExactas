
	<nav class="navbar navbar-expand-lg navbar-dark gris fixed-top scrolling-navbar">
  <a class="navbar-brand" href="<?=base_url()?>Home/index">
    <img id="logo-nav" alt="Website Logo" src="<?=base_url ('assets/img/logofr.png');?>">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Home/index">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Home/quienesSomos">Quienes Somos</a>
      </li> -->
      <?php if(!$this->session->userdata('logged_in')) : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Home/mensaje">Contáctanos</a>
      </li>
    <?php endif;?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>carreras/" tabindex="-1" aria-disabled="true">Carreras</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Home/archivos" tabindex="-1" aria-disabled="true">Centro de Estudiantes</a>
      </li> -->
      <!-- <li class="nav-item">
       <a class="nav-link" href="<?=base_url()?>Home/mostrarEventos" tabindex="-1" aria-disabled="true">Actividades</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Home/ingresantes" tabindex="-1" aria-disabled="true">Ingresantes 2021</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Home/planes">Planes de Estudio</a>
      </li>
      <li>
     <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="buscador" id="buscador" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </li>-->
      <?php if(!$this->session->userdata('logged_in')) : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Users" tabindex="-1" aria-disabled="true">Ingresar</a>
      </li>
      <?php elseif ($this->session->userdata('logged_in')) : ?>
     <?php if(($this->session->userdata('logged_in')) &&($this->session->userdata('perfil_id') == 1)): ?>
     <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Admin" tabindex="-1" aria-disabled="true">Mi Panel</a>
      </li>
    <?php endif;?>
       <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Admin/logout" tabindex="-1" aria-disabled="true">Salir</a>
      </li>




      <?php endif;?>
    </ul>

   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn my-2 my-sm-0 botonMio" style="background-color: rgba(245, 113, 36, 0.9);" type="submit">Buscar</button>
    </form> -->
  </div>

</nav>

<br>
