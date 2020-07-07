<?php
require_once('class/db.class.php');
require_once('class/usuario.class.php');

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
  $usuario = new usuario();
  $email = $_POST['email'];
  if($usuario->validaLogin($_POST)){
    header ('Location: index.php');
  }
  else {
    $erro = 1;
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>Notas | Login</title>

  <?php
  include 'include/head_link.php';
  ?>

  <style>
    #img {
      background-image: url('dist/img/back.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>

</head>
<body class="hold-transition login-page" id="img">

<div class="login-box">
  <div class="login-logo">
    <a href="" style="color: white"><b>SMR |</b> Notas</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça o login para iniciar sua sessão</p>

      <?php if ( @$erro == 1 ) {?>
        <p class="login-box-msg" id="erroMsg" style="color: red">Email ou senha incorretos</p>
      <?php } ?>

      <form method="post" id="formLogin">
        <div class="input-group mb-3" id="campos">
          <input type="email" name="email" id="email" class="form-control" value="<?= @$email ?>" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" id="campos">
          <input type="password" name="senha" id="senha" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7"></div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block" id="signIn">
              Sign In
            </button>
          </div><!-- /.col -->
        </div>
      </form>
    </div><!-- /.login-card-body -->
  </div>
</div><!-- /.login-box -->

<?php
include 'include/body_script.php';
?>

<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

<script>

$(document).ready(function () {
  $('#formLogin').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      senha: {
        required: true,
        minlength: 5
      },
    },
    messages: {
      email: {
        required: "Por favor insira o seu E-mail",
        email: "Por favor insira um E-mail valido"
      },
      senha: {
        required: "Por favor insira sua senha",
        minlength: "Sua senha tem que ter ao menos 5 caracteres"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('#campos').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

</script>

</body>
</html>
