<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/fontawesome-pro/css/all.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
 
 

  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Cuentas Premium</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle fas fa-bars fa-3x" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
     
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?php echo base_url() ?>/images/user-m.jpg" alt="User Image" height="60" width="60">
        <div>
          <p class="app-sidebar__user-name">Luis Herrera</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo base_url() ?>/dashboard"><i class="app-menu__icon fas fa-tachometer"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-book-alt"></i><span class="app-menu__label">Cuentas</span><i class="treeview-indicator fas fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url() ?>/cuentas"><i class="nav-icon fas fa-list pr-2"></i> Lista de Cuentas</a></li>
            <li><a class="treeview-item" href="#"><i class="nav-icon fas fa-plus pr-2"></i> Tipo Cuenta</a></li>
            
          </ul>
        </li>      
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fas fa-users"></i><span class="app-menu__label">Clientes</span><i class="treeview-indicator fas fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url() ?>/clientes"><i class="nav-icon fas fa-list pr-2"></i> Lista de Clientes</a></li>
            <li><a class="treeview-item" href="#"><i class="nav-icon fas fa-trash pr-2"></i> Clientes Eliminados</a></li>
          </ul>
        </li>
        
        <li><a class="app-menu__item" href="docs.html"><i class="app-menu__icon fas fa-sign-out"></i><span class="app-menu__label">Cerrar Sesión</span></a></li>
      </ul>
    </aside>
    <main class="app-content">