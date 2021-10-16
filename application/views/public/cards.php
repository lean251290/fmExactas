<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->

 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/acordeon.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estiloPie.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estilotarjeta3D.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estiloLogin.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estiloCurso.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estiloPanelAdmin.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estilosingresantes.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/fuentes.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <style type="text/css">
/*estilos para la tabla*/
table th {
    background-color: #72032b !important;
    color: white;
}
table>tbody>tr>td {
    vertical-align: middle !important;
    background-color: transparent !important;
    font-size: 20px;
}

.btn, .btn-secondary{
  position: relative !important;
    margin-bottom: 5px !important;
    color: #fff !important;
}
 </style>

    <title>Archivos de <?= $materia->nombre;?></title>
</head>

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
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url()?>Home/archivos" tabindex="-1" aria-disabled="true">Centro de Estudiantes</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="<?=base_url()?>Home/mostrarEventos" tabindex="-1" aria-disabled="true">Actividades</a>
      </li>
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


<body>
    <br>
    <br>
    <br>
    <br>
    <h1 class="letra-archivos text-center">Archivos de <?= $materia->nombre;?></h1>
    <div class="container">
    <?php if (($this->session->userdata('logged_in')) && ($this->session->userdata['perfil_id'] == 1)): ?>
 <div class="table-responsive">
    <table id="table_id" class="table table-hover">
    <thead>
        <tr>
            <th>Título</th>
            <th>Imagen</th>
            <th>Descarga</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($materia->archivos as $archivo):?>
        <?php if ($archivo->eliminado_flag == 1): ?>
        <tr>
            <td><?=$archivo->titulo;?></td>
        <td>
            <img class="img-thumbnail" src="<?= base_url().$archivo->img;?>" style="width: 50px; height:auto;">
        </td>
        <td>
            <a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: black" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar</a>
        </td>
        <td>
            <form action="<?=base_url('Documentos_controller/Borrar');?>" method="post" enctype="multipart/form-data">
                                    <button name="borrar" class="btn botonMio" type="submit" value="<?=$archivo->id_documento;?>">Borrar</button>
            </form>
        </td>
        </tr>
        <?php endif;?>
        <?php endforeach;?>
        <?php else:?>
            <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Título</th>
            <th>Imagen</th>
            <th>Descarga</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($materia->archivos as $archivo):?>
        <?php if ($archivo->eliminado_flag == 1): ?>
        <tr>
            <td><?=$archivo->titulo;?></td>
        <td>
            <img class="img-thumbnail" src="<?= base_url().$archivo->img;?>" style="width: 50px; height:auto;">
        </td>
        <td>
            <a href="<?=base_url('documentos/'.$archivo->ruta);?>" style="color: black" target="_blank"><i class="fas fa-file" style="color: orange"></i> Descargar</a>
        </td>
        <?php endif;?>
        <?php endforeach;?>
        <?php endif;?>

    </tbody>
</table>
</div>
<br>
</div>
<div class="container text-center">
    <a class="btn botonMio" style="background-color: #FF8000;" href="<?=base_url('Documentos_controller/subirDocumento/'.$materia->id);?>">Agregar Archivo</a>
   <form action="<?=base_url('carreras/detalle/'.$carrera->idcarrera.'/0');?>" enctype="multipart/form-data">
                  <button class="btn botonMio" style="background-color: #FF8000;" type="submit">Volver</button>
                  <hr>
                </form>
</div>


</body>

<footer>
    <!-- <section id="footer">
        <div class="container wow fadeInUp">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/franjamoradaexactasunne"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://instagram.com/fm.exactas?igshid=1n4jfpiue3jes" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="seu.aguara.guazu.2018@gmail.com" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://wa.me/543794015410" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="http://exa.unne.edu.ar/" target="_blank">U.N.N.E.</a></u> Página Oficial</p>
                    <p class="h6">Copyright &copy; Franja-Morada-Exactas - Developed By: "CompuMundoHiperMegaRed"<img src="<?=base_url();?>assets/img/homero.png" class="marca"></div>
                </hr>
            </div>
        </div>
    </section> -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/sweetalert.min.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/funciones.js"> </script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/buscador.js"> </script>
<script>
 $(document).ready( function () {
    $('#table_id').DataTable(
        {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
                },
            responsive: "true",
            dom: 'Bfrtlp',
            });
} );
</script>
</footer>
<script>
        new WOW().init();
    </script>
</html>





