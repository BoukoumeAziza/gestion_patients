<?php
/* Smarty version 5.4.3, created on 2025-01-22 19:43:15
  from 'file:layouts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_67913c438e1465_40532053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4582cdf0c0e478bf30d21eba5aa742a8d40fd20e' => 
    array (
      0 => 'layouts.tpl',
      1 => 1737571299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67913c438e1465_40532053 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Management System</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AdminLTE CSS -->
    <link href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css" rel="stylesheet">

    <!-- FontAwesome for icons -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <style>
        /* Custom Color Scheme */
        :root {
            --primary-color: #00796b; /* Vert moderne */
            --sidebar-bg: #004d40; /* Vert foncé */
            --navbar-bg: transparent; /* Navbar transparente */
            --footer-bg: transparent; /* Footer transparent */
            --text-color: #fff; /* Texte blanc */
        }

        /* Sidebar customization */
        .main-sidebar {
            background-color: var(--sidebar-bg) !important;
        }

        .nav-sidebar .nav-link {
            color: var(--text-color) !important;
        }

        .nav-sidebar .nav-link:hover {
            background-color: var(--primary-color) !important;
            color: #fff !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Accueil</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <i class="fas fa-hospital-symbol"></i>
                <span class="brand-text font-weight-light">Healthcare System</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Tableau de Bord</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>Patients</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file-medical"></i>
                                <p>Consultations</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Block for the page content -->
                <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_175460780467913c438d2d60_21025064', "content");
?>

            </div>
        </div>

        <!-- Footer -->
        <footer class="main-footer text-center">
            <strong>&copy; 2024 Healthcare Management System.</strong> Tous droits réservés.
        </footer>
    </div>

    <!-- Scripts -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
/* {block "content"} */
class Block_175460780467913c438d2d60_21025064 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management\\app\\Views';
}
}
/* {/block "content"} */
}
