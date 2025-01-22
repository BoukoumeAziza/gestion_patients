<?php
/* Smarty version 5.4.3, created on 2025-01-22 11:37:12
  from 'file:layouts/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_6790ca586fb9c1_75512320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52b819b53e58237b4a3875075e64563c11a041f' => 
    array (
      0 => 'layouts/header.tpl',
      1 => 1737542226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6790ca586fb9c1_75512320 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views\\layouts';
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? 'Gestion Patients' ?? null : $tmp);?>
</title>
<link rel="stylesheet" href="public/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
       <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Logo -->
    <a href="#" class="brand-link">
        <img src="/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MediCore Hospital</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Patient Details -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-injured"></i>
                        <p>Patient Details</p>
                    </a>
                </li>

                <!-- Doctor Details -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Doctor Details</p>
                    </a>
                </li>

                <!-- Payment Details -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>
                        <p>Payment Details</p>
                    </a>
                </li>

                <!-- E-Channeling -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-video"></i>
                        <p>E-Channeling</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<?php }
}
