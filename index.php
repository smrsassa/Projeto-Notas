<?php
include 'ajax/login.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>

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

          <!-- Navegação pelo nome da pagina -->
          <nav class="navbar navbar-expand-md">
            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <h1 id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle" style="color: #17a2b8"><a><strong>hub</strong></a></h1>
                  <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">Some action </a></li>
                    <li><a href="#" class="dropdown-item">Some other action</a></li>

                    <li class="dropdown-divider"></li>

                    <!-- Level two dropdown-->
                    <li class="dropdown-submenu dropdown-hover">
                      <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                      <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                        <li>
                          <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                        </li>

                        <!-- Level three dropdown-->
                        <li class="dropdown-submenu">
                          <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                          <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                            <li><a href="#" class="dropdown-item">3rd level</a></li>
                          </ul>
                        </li>
                        <!-- End Level three -->

                        <li><a href="#" class="dropdown-item">level 2</a></li>
                        <li><a href="#" class="dropdown-item">level 2</a></li>
                      </ul>
                    </li>
                    <!-- End Level two -->
                  </ul>
                </li>
              </ul>
            </div>
          </nav><!--/ Navegação pelo nome da pagina -->

          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">New notes</h3>
              </div>
              <div class="card-body">
                <p>
                  assssssssssssssssssssssss <a href="notas.php"> sssssssssssssss</a>sssssssssssssssssssssssssssss
                  assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
                  assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
                  assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
                </p>
              </div>
            </div>

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <section class="col-lg-6 connectedSortable">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">New notes</h3>
              </div>
              <div class="card-body">
                <p>
                assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
                assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
                assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
                assssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
                </p>
              </div>
            </div>
          </section>
      </div><!-- /.container-fluid -->
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

  <!-- Main Footer -->
  <footer class="main-footer" id="footer">
    <?php include 'include/footer.php'; ?>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

  <?php include 'include/body_script.php'; ?>
</body>
</html>
