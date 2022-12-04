<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard - SIA Mercu Buana</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/plugins/');?>font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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

  
  <div class="content-wrapper">
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tareas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="javascript:;">SIAAA Mercu Buana</a></li>
              <li class="breadcrumb-item active">Tareas</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          

  		</div>
	  </div>
    </section>
    
  </div>
  
 
  
</div>

<script src="<?=base_url('assets/plugins/');?>jquery/jquery.min.js"></script>

<script src="<?=base_url('assets/plugins/');?>bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="<?=base_url('assets/plugins/');?>slimScroll/jquery.slimscroll.min.js"></script>

<script src="<?=base_url('assets/plugins/');?>fastclick/fastclick.js"></script>

<script src="<?=base_url('assets/dist/');?>js/adminlte.js"></script>

<script src="<?=base_url('assets/dist/');?>js/pages/dashboard.js"></script>
</body>
</html>