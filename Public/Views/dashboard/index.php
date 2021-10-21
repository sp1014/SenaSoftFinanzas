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
                    <h3 class="mt-4">1  </h3>
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
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/icono.png" alt="" class="rounded-circle thumb-md">
                                </div>
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
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/icono.png" alt="" class="rounded-circle thumb-md">
                                </div>
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
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/icono.png" alt="" class="rounded-circle thumb-md">
                                </div>
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
                                <div class="float-left mb-0 mr-3">
                                    <img src="Public/Assets/images/icono.png" alt="" class="rounded-circle thumb-md">
                                </div>
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

                    <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                    <ol class="activity-feed mb-0">
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <p class="text-muted mb-1">Now</p>
                                <p class="font-15 mt-0 mb-0">Andrei Coman magna sed porta finibus, risus posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                            </div>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1">Yesterday</p>
                            <p class="font-15 mt-0 mb-0">Andrei Coman posted a new article: <b class="text-primary">Designer Alex</b></p>
                        </li>
                        <li class="feed-item">
                            <p class="text-muted mb-1">2:30PM</p>
                            <p class="font-15 mt-0 mb-0">Zack Wetass, sed porta finibus, risus Chris Wallace Commented <b class="text-primary"> Developer Moreno</b></p>
                        </li>
                        <li class="feed-item pb-1">
                            <p class="text-muted mb-1">12:48 PM</p>
                            <p class="font-15 mt-0 mb-2">Zack Wetass, Chris Wallace Commented <b class="text-primary">UX Murphy</b></p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- START ROW -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title mb-4">Active Deals</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Location</th>
                                    <th scope="col" colspan="2">Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Philip Smead</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>$9,420,000</td>
                                    <td>
                                        <div>
                                            <img src="Public/Assets/images/icono.png" alt="" class="thumb-md rounded-circle mr-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>Houston, TX 77074</td>
                                    <td>15/1/2018</td>

                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brent Shipley</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td>$3,120,000</td>
                                    <td>
                                        <div>
                                            <img src="Public/Assets/images/icono.png" alt="" class="thumb-md rounded-circle mr-2"> Brent Shipley
                                        </div>
                                    </td>
                                    <td>Oakland, CA 94612</td>
                                    <td>16/1/2019</td>

                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Robert Sitton</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>$6,360,000</td>
                                    <td>
                                        <div>
                                            <img src="Public/Assets/images/icono.png" alt="" class="thumb-md rounded-circle mr-2"> Robert Sitton
                                        </div>
                                    </td>
                                    <td>Hebron, ME 04238</td>
                                    <td>17/1/2019</td>

                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alberto Jackson</td>
                                    <td><span class="badge badge-danger">Cancel</span></td>
                                    <td>$5,200,000</td>
                                    <td>
                                        <div>
                                            <img src="Public/Assets/images/icono.png" alt="" class="thumb-md rounded-circle mr-2"> Alberto Jackson
                                        </div>
                                    </td>
                                    <td>Salinas, CA 93901</td>
                                    <td>18/1/2019</td>

                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>David Sanchez</td>
                                    <td><span class="badge badge-success">Delivered</span></td>
                                    <td>$7,250,000</td>
                                    <td>
                                        <div>
                                            <img src="Public/Assets/images/icono.png" alt="" class="thumb-md rounded-circle mr-2"> David Sanchez
                                        </div>
                                    </td>
                                    <td>Cincinnati, OH 45202</td>
                                    <td>19/1/2019</td>

                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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