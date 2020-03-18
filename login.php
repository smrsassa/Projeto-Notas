<?php
require_once("class/db.class.php");
require_once("class/login.class.php");

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
  $email = $_POST['email'];
  $senha = $_POST['password'];
  $login = new login();
  $login->Login($email, $senha);
  if( @$_SESSION['logado'] ) {
    header('Location: ');
  } else {
    $email = "s";
  }
}

?>
<!DOCTYPE html>
<html>
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
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
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

$(document).ready(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      $("#signIn").click(function(){

        var formData = new FormData();

        var email = document.getElementById("email");
        var password = document.getElementById("password");

        formData.set("email", email.value)
        formData.set("password", password.value)

        $.ajax({
          url: 'login.php',
          type: 'post',
          data: formData,
          contentType: false,
          processData: false,
        });
      });
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
