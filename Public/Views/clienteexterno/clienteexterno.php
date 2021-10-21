<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title><?= $data['tittle'] ?></title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />
    <link rel="shortcut icon" href="Public/Assets/images/icono.png">
    <link href="Public/Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    require_once('Public/Views/vector/header.php');
    ?>

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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Subir</a></li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div>
                <!-- end page-title -->

                <div class="row  d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <div class="col-sm-9 ">
                                    <h4 class="page-title">Registrar Documento</h4>
                                </div>
                                <span>-</span>
                                <form enctype="multipart/form-data" id="form-clienteex">
                                    <div class="form-group">
                                        <label for="txtCategoria">Categoria</label>
                                        <select class="form-control" id="txtCategoria" name="txtCategoria" required>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="txtFile">Documento</label>
                                        <div>
                                            <input class="form-control-file" type="file" id="txtFile" name="txtFile" accept="application/pdf" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Enviar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>

    <!-- END wrapper -->
    <?php
    require_once('Public/Views/vector/footer.php');
    require_once('Public/Views/components/scripts.php');
    ?>
    <!-- jQuery  -->
    <script src="Public/Assets/js/jquery.min.js"></script>
    <script src="Public/Assets/js/bootstrap.bundle.min.js"></script>
    <script src="Public/Assets/js/metismenu.min.js"></script>
    <script src="Public/Assets/js/jquery.slimscroll.js"></script>
    <script src="Public/Assets/js/waves.min.js"></script>

    <!-- Parsley js -->
    <script src="Public/Assets/plugins/parsleyjs/parsley.min.js"></script>
    <!-- App js -->
    <script src="Public/Assets/js/app.js" defer></script>
    <script src="Public/Assets/js/functions/clienteexterno.js" defer></script>

    <script defer>
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
</body>

</html>