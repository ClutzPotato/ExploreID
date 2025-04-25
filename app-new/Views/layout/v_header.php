<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ExploreID | Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets_admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets_admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets_admin/css/adminlte.min.css') ?>">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets_admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets_admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets_admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets_admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets_admin/plugins/summernote/summernote-bs4.min.css">
    
    <link rel="stylesheet" href="<?= base_url('assets_guest/css/lightbox.css') ?>">

</head>
<style>
    /* Hide scrollbar for Chrome, Safari and Opera */
    body::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    body {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
                    <div class="info">
                    <b class="text-muted">Session: <?= session()->get('user_name') ?>&nbsp;(<?= ucfirst(session()->get('user_status')) ?>)</b>
                    </div>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">

                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> Reports
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> Request
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
            </ul>
        </nav>
        <!-- /.navbar -->
        <?php
        $activePage = basename($_SERVER['PHP_SELF']);;
        ?>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <span class="brand-text font-weight-light">&nbsp; Explore<b>ID</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="dashboard" class="nav-link <?= ($activePage == 'dashboard') ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <!-- aku ngak bisa bikin navbar ini untuk kebuka turun... -->
                        <?php
                        if ($_SESSION['user_status']=="administrator")
                        {
                        ?>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=province" class="nav-link <?php if(isset($table)){if($table=='province'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Province</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=clothes" class="nav-link <?php if(isset($table)){if($table=='clothes'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Clothes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=house" class="nav-link <?php if(isset($table)){if($table=='house'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>House</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=dance" class="nav-link <?php if(isset($table)){if($table=='dance'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=song" class="nav-link <?php if(isset($table)){if($table=='song'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Songs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=instrument" class="nav-link <?php if(isset($table)){if($table=='instrument'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Instrument</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=landmark" class="nav-link <?php if(isset($table)){if($table=='landmark'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Landmark</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=food" class="nav-link <?php if(isset($table)){if($table=='food'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Food</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=story" class="nav-link <?php if(isset($table)){if($table=='story'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Story</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="table?table=taboo" class="nav-link <?php if(isset($table)){if($table=='taboo'){echo ($activePage == 'table') ? 'active' : '';}} ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Taboo</p>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a href="request" class="nav-link <?= ($activePage == 'request' || $activePage == 'requestinfo') ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-file-import mr-1"></i>
                                <p>
                                    Requests
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="login/logout" class="nav-link <?= ($activePage == 'index') ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-sign-out-alt mr-1"></i>
                                <p>
                                    Sign Out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">