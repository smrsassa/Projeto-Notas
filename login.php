<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Notas | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <a href="" style="color: white"><b>Notas |</b> SMR</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post" id="login">
        <div class="input-group mb-3" id="campos">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email">
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
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php
include 'include/body_script.php';
?>

<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>

<script type="text/javascript">

$().ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {

		  var email=$('#email').val();	//Pega valor do campo email
		  var senha=$('#senha').val();	//Pega valor do campo senha
		  $.ajax({			//Função AJAX
		  	url:"ajax/login.php",			//Arquivo php
		  	type:"post",				//Método de envio
		  	data: "email="+email+"&senha="+senha,	//Dados
   	  	success: function (result){			//Sucesso no AJAX
          if(result==1){
            location.href='index.php'	//Redireciona
          }else{
            $('#errolog').show();		//Informa o erro
          }
        }
      })
		  return false;	//Evita que a página seja atualizada

    }
  });
  $('#login').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      }
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
