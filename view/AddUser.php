<?php 
include '../controllers/UtilisateurController.php';


?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  
</svg>
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
      
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" >
            <a href="admin.php" class="nav-link">
              <i class="bi bi-person-circle"></i>
              <p>
                Commande
              </p>
            </a>
          </li> 
          <li class="nav-item" >
            <a href="AddUser.php" class="nav-link">
            <i class="bi bi-person-circle"></i>
              <p>
                Utilisateur
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Product.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <i class="bi bi-person-fill-add"></i>
              <p>
                Article 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Catigorie.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Catigorie
              </p>
            </a>
          </li>
          <li class="nav-item" style=" margin-top:380px ;">
            <a href="logout.php" class="nav-link">
            <i class="bi bi-box-arrow-left"></i>
              <p>
                Deconexion
              </p>
            </a>
          </li>
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Liste Des Utilisatuer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">liste Des Utilisatuer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php
        if(isset($_POST['Ajouter'])){
          $NewUser= new UtilisateurController();
          $NewUser->AddUser();
          }
     ?>

  <!-- Content Wrapper. Contains page content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
                 <!--______________________________forms ajouter Utilisateur_____________________________________-->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">
                    <i class="bi bi-plus-circle-fill"></i>
                  </button>
                  <div class="modal fade " id="modal-lg">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Ajouter Utilisateur</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action=""  method="POST" >
                          <div class="mb-3">
                            <label  class="form-label">Nom </label>
                            <input type="text"  class="form-control" name="nom" placeholder="entre le Nom">
                            <div id="emailHelp" class="form-text" ></span></div>
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Prenom</label>
                            <input type="text"  class="form-control" name="prenom" placeholder="entre le Prenom">
                            <div id="emailHelp" class="form-text" ></span></div>
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Login</label>
                            <input type="text"  class="form-control" name="login" placeholder="entre Login">
                            <div id="emailHelp" class="form-text" ></span></div>
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Telephone</label>
                            <input type="number"  class="form-control"  name="telephone" placeholder="entre numero de telephone">
                            <div id="emailHelp" class="form-text" ></span></div>
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Email</label>
                            <input type="email"  class="form-control" name="email" placeholder="entre email">
                            <div id="emailHelp" class="form-text" ></span></div>
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Password</label>
                            <input type="password"  class="form-control" name="password" placeholder="Password">
                            <div id="emailHelp" class="form-text" ></span></div>
                          </div>
                          <div class="mb-3">
                            <label  class="form-label">Confirmer Password</label>
                            <input type="password"  class="form-control" name="Confi_password" placeholder="Confirmer password">
                            <div id="emailHelp" class="form-text" ></span></div>
                          </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="Ajouter" class="btn btn-primary">Ajouter</button>
                          </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                  </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.modal -->

              
              </div>
              <!-- /.card-header -->
              <!--All Products-->
              <?php
               $data = new UtilisateurController();
                $users = $data->getAllUser();
              ?>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead class="thead-dark">
                  <tr>
                    <th>#ID</th>
                    <th>Nom </th>
                    <th>Prenom</th>
                    <th>Login </th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date Creation</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody class="body-dark">
                  <?php foreach($users as $user) : ?>
                  <tr >
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['nom'] ?></td>
                    <td><?= $user['prenom'] ?></td>
                    <td><?= $user['login'] ?></td>
                    <td><?= $user['telephone'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['password'] ?></td>
                    <td><?= $user['date_creation'] ?></td>
                   <!--td><img style="width: 70px;" src="ImageArticle/<?php // $produit['image'] ?>" alt="<?php //$produit['Nom'] ?>"></!--td-->
                      <td style=" width: 40px ; text-align: center;">
                      <form action="DeleteUser.php" method="POST" style="  width: 45px; ">
                          <input type="hidden" name="id_user" value="<?= $user['id'] ?>">
                          <button type="submit" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></button>
                      </form>
                    </tr> 
                  <?php endforeach ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
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
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      /*"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });


  // function model
  var myModal = document.getElementById('myModal')
  var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
       myInput.focus()
      })


</script>
</body>
</html>
