<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lista de usuarios</title>
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
             <div class="card-header">
                <h3 class="card-title">Tareas</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                  <button type="button" 
                      onclick="javascript:top.location.href='<?=base_url("/index.php/tareas/add_new/");?>';" class="btn btn-block btn-success btn-sm">Adicionar Tareas</button>
                  </div>
                </div>
              </div>
              <div class="content-wrapper">
        <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tr>
                    <th>No.</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th></th>
                  </tr>
                  <?php
                    $i=1;
                    foreach ($tareas as $d) {
                  ?>
                  <tr>
                    <td><?=$i++;?></td>
                    <td><?=$d->titulo;?></td>
                    <td><?=$d->descripcion;?></td>
                    <td>
                          <div class="btn-group">
                            <button type="button" onclick="javascript:top.location.href='<?=base_url("/index.php/tareas/edit/{$d->id}");?>';" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button> 
                            <button type="button" onclick="javascript:top.location.href='<?=base_url("/index.php/tareas/delete/{$d->id}");?>';" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                          </div>
                        </td>
                  </tr>
                  <?php } ?>
                </table>
              </div>
            </div>
            </div>   
            </div>  
    </section>          
</div>
</body>
</html>