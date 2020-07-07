<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>Notas | Hub</title>

  <style>
    #img {
      background-image: url('dist/img/back.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>

  <?php include 'include/head_link.php'; ?>

</head>
<body class="hold-transition layout-top-nav" >
<div class="wrapper" >
<?php include 'include/navbar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"id="img">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color: white"><strong>Perfil</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item">Perfil</li>
              </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/UniversalLogo.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Name</h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Notas</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Projetos</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Tags</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
      <!-- /.content -->
    </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <footer class="main-footer" id="footer">
    <?php include 'include/footer.php'; ?>
  </footer>

  <!-- REQUIRED SCRIPTS -->
  <?php include 'include/body_script.php'; ?>
</body>
</html>
