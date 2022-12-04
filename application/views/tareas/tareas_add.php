<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Baru - SIA Mercu Buana</title>
  <link rel="shortcut icon" href="<?=base_url('favicon.ico');?>" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/plugins/');?>font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/dist/');?>css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
          </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        
        <a href="<?=base_url('/');?>" class="brand-link">
          <img src="<?=base_url('assets/images/logo.png');?>" alt="logo" class="ml-3 img-size-32 mr-2">
          <span class="brand-text font-weight-light">Gestion de Tareas</span>
        </a>

        
        <div class="sidebar">

          
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="<?=base_url('/index.php/tareas/');?>" class="nav-link active">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>Tareas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('/index.php/usuarios/');?>" class="nav-link active">
                  <i class="nav-icon fa fa-dashboard"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              
            </ul>
          </nav>
          
        </div>
        
    </aside>
    <section class="content">
    <div class="container-fluid"> <div class="row">
    <div class="col-12">
    <div class="card">
          
            <div class="content-wrapper">
        <form action="grabar_tarea.php" method="POST">
          <div class="form-group">
            <input type="text" name="titulo" class="form-control" placeholder="Task Title" autofocus>
          </div>
          <div class="form-group">
            <textarea name="descripcion" rows="2" class="form-control" placeholder="Task Description"></textarea>
          </div>
          <input type="submit" name="grabar_tarea" class="btn btn-success btn-block" value="Save Task">
        </form>
                
              </div>
            </div>
            </div>   
            </div>  
    </section>        
  
    
  </div>
  <script src="<?=base_url('assets/plugins/');?>jquery/jquery.min.js"></script>
  <script src="<?=base_url('assets/plugins/');?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="<?=base_url('assets/plugins/');?>slimScroll/jquery.slimscroll.min.js"></script>
  <script src="<?=base_url('assets/plugins/');?>fastclick/fastclick.js"></script>
  <script src="<?=base_url('assets/dist/');?>js/adminlte.js"></script>
</body>
</html>