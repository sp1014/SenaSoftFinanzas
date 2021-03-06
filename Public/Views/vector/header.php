<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <span class="logo-light">
                    <img src="Public/Assets/images/Logo.png" width="210" height="40px">
                </span>
                <span class="logo-sm">
                    <img src="Public/Assets/images/Icono.png" width="50px">
                </span>
            </a>
        </div>

        <nav class="navbar-custom">
            <ul class="navbar-right list-inline float-right mb-0">


                <!-- full screen -->
                <li class=" notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                        <i class="mdi mdi-arrow-expand-all noti-icon"></i>
                    </a>
                </li>



                <li class="dropdown notification-list list-inline-item">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                             <?=$_SESSION['sessionLogin']["nombre"]?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <a class="dropdown-item text-danger" href="<?= URL ?>?c=Logout&a=index"><i class="mdi mdi-power text-danger"></i>Cerrar sesión</a>
                        </div>

                    </div>
                </li>
            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left ">
                    <button class="button-menu-mobile open-left waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>

            </ul>
        </nav>
    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="<?= URL ?>?c=dashboard&a=index" class="waves-effect">
                        <i class="fas fa-home"></i><span>Inicio</span>
                    </a>
                </li>
                <?php if ($_SESSION['sessionLogin']['tipo_rol'] == 'Cliente Externo') { ?>
                    <li>
                        <a href="<?= URL ?>?c=clienteexterno&a=index" class="waves-effect">
                            <i class="fas fa-file-import"></i><span>Subir archivo</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['sessionLogin']['tipo_rol'] == 'Cliente Interno' || $_SESSION['sessionLogin']['tipo_rol'] == 'Administrador') { ?>
                    <li>
                        <a href="<?= URL ?>?c=cliente&a=index" class="waves-effect">
                            <i class="fas fa-folder-open"></i><span>Consultar archivos</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['sessionLogin']['tipo_rol'] == 'Cliente Interno' || $_SESSION['sessionLogin']['tipo_rol'] == 'Administrador') { ?>
                    <li>
                        <a href="<?= URL ?>?c=categoria&a=Nuevo" class="waves-effect">
                            <i class="fas fa-plus"></i><span>Crear categorias</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($_SESSION['sessionLogin']['tipo_rol'] == 'Administrador') { ?>
                    <li>
                        <a href="<?= URL ?>?c=admin&a=Nuevo" class="waves-effect">
                            <i class="fas fa-user"></i><span>Registrar Usuario</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
        <!-- Sidebar -left -->
    </div>
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title"></h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div>
                