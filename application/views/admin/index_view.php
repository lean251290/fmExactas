<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Area Admin</title>
</head>
<body>
  <div class="container">
  <table class="table">
    <thead>
      <tr>
        <td>Username</td>
        <td>password</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?=$this->session->userdata('username');?></td>
        <td><?=$this->session->userdata('password');?></td>
      </tr>
    </tbody>
  </table>
  <button onclick="cerrar_sesion()" class="btn btn-primary">cerrar sesion</button>
  </div>
 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
  function cerrar_sesion(){
    $.ajax({
      url : "<?=base_url('users/cerrar_sesion');?>",
      type: 'POST',
      success: function(resp){
        console.log('logged out');
      }
    });
  }
</script>

</body>
</html>