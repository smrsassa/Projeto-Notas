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
            <h1 style="color: white"><strong>Hub</strong></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
              </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
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
