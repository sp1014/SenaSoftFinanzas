<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title><?= $data['tittle'] ?></title>
    <link rel="shortcut icon" href="Public/Assets/images/Icono.png" type="image/x-icon">
    <link href="Public/Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    require_once('Public/Views/vector/header.php');
    ?>
    <div class="row">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Sesiones activas</h5>
                    </div>
                    <h3 class="mt-4">4</h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="float-right">100%</span>
                </div>
            </div>
        </div>
        <br>
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Categorias actuales</h5>
                    </div>
                    <h3 class="mt-4">2</h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width:100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="float-right">100%</span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-tag-text-outline bg-warning text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Archivos</h5>
                    </div>
                    <h3 class="mt-4">1</h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="float-right">100%</span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-buffer bg-danger text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Categorias nuevas</h5>
                    </div>
                    <h3 class="mt-4">1 </h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span class="float-right">82%</span>
                </div>
            </div>
        </div>
    </div>
    <p> </p>
    <div class="row">
        <div class="col-xl-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Usuarios registrados</h4>
                    <div class="friends-suggestions">
                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Edier Hernandez</h5>
                                    <p class="text-muted">Tel:3134587765</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Edwar Pérez</h5>
                                    <p class="text-muted">Tel:3561783452</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                               
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Sergio Vargas</h5>
                                    <p class="text-muted">Tel:3423567892</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>
                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Pepe Perez</h5>
                                    <p class="text-muted">Tel:3872138794</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title mb-4">Funciones principales</h4>
                    <ol class="activity-feed mb-0">
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <p class="text-muted mb-1">Sistema</p>
                                <p class="font-15 mt-0 mb-0">El sistema permitira al rol administrador crear un usuario y su respectivo rol.</p>
                            </div>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1">Rapidez</p>
                            <p class="font-15 mt-0 mb-0">Los PDF se mostraran en menos de 5 segundos y con la informacion adecuada.
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1">Categoria</p>
                            <p class="font-15 mt-0 mb-0">Cada PDF va a ser filtrado por su categoria y su consulta sera rápida.</p>
                        </li>
                        <li class="feed-item pb-1">
                            <p class="text-muted mb-1">Almacena</p>
                            <p class="font-15 mt-0 mb-2">Almacena la infotmacion de una manera organizada dependiendo su categoria</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once("Public/Views/Vector/footer.php");
    ?>
    <!-- jQuery -->
    <script src="Public/Assets/js/jquery.min.js" defer></script>
    <script src="Public/Assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="Public/Assets/js/metismenu.min.js" defer></script>
    <script src="Public/Assets/js/jquery.slimscroll.js" defer></script>
    <script src="Public/Assets/js/waves.min.js" defer></script>




    <!-- App js -->
    <script src="Public/Assets/js/app.js" defer></script>
</body>

</html>