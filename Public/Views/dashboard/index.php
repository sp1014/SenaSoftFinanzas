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
    <h1 class="titulo">Financialfast</h1>
    <div class="row">

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-cube-outline bg-primary  text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Active Sessions</h5>
                    </div>
                    <h3 class="mt-4">43,225</h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">75%</span></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-heading p-4">
                    <div class="mini-stat-icon float-right">
                        <i class="mdi mdi-briefcase-check bg-success text-white"></i>
                    </div>
                    <div>
                        <h5 class="font-16">Total Revenue</h5>
                    </div>
                    <h3 class="mt-4">$73,265</h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">88%</span></p>
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
                        <h5 class="font-16">Average Price</h5>
                    </div>
                    <h3 class="mt-4">447</h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">68%</span></p>
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
                        <h5 class="font-16">Add to Card</h5>
                    </div>
                    <h3 class="mt-4">86%</h3>
                    <div class="progress mt-4" style="height: 4px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-muted mt-2 mb-0">Previous period<span class="float-right">82%</span></p>
                </div>
            </div>
        </div>

    </div>

    <p> </p>
    <!-- end col -->
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">módulos</h4>
                    <div class="friends-suggestions">
                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/upload.png" alt="" width="100px" height="73px" class="rounded-circle">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Subir Archivo</h5>
                                    <p class="text-muted">-</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/search.png" alt="" width="100px" height="73px" class="rounded-circle">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Consultar Archivo</h5>
                                    <p class="text-muted">-</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/categories.png" alt="" width="100px" height="73px" class="rounded-circle">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Crear Categorias</h5>
                                    <p class="text-muted">-</p>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="friends-suggestions-list">
                            <div class="border-bottom position-relative">
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/usuario.png" alt="" width="100px" height="73px" class="rounded-circle">
                                </div>
                                <div class="suggestion-icon float-right mt-2 pt-1">
                                    <i class="mdi mdi-plus"></i>
                                </div>

                                <div class="desc">
                                    <h5 class="font-14 mb-1 pt-2 text-dark">Registrar Usuario</h5>
                                    <p class="text-muted">-</p>
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
                            <p class="font-15 mt-0 mb-2">Almacena la infotrmación de una manera organizada dependiendo su categoria</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once("Public/Views/Vector/footer.php");
    require_once('Public/Views/components/scripts.php');
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