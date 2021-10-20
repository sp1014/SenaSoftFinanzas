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
    <!-- Begin page -->
    <div class="accountbg">
        <div class="wrapper-page">
            <div class="card card-pages shadow-none">
                <div class="card-body">
                    <div class="text-center m-t-0 m-b-15">
                        <a class="logo logo-admin"><img src="Public/Assets/images/Logo.png" height="60" width="240px"></a>
                    </div>
                    <h5 class="font-18 text-center">Iniciar Sesión</h5>
                    <form  class="form-horizontal m-t-30" id="signIn">
                        <div class="form-group">
                            <div class="col-12">
                                <label>Correo</label>
                                <input class="form-control" type="email" id="txtEmail" name="txtEmail" placeholder="ejemplo@micorreo">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <label>Contraseña</label>
                                <input class="form-control" type="password" id="txtPass" name="txtPass" placeholder="Contraseña">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Ingresar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->
    
    <?php
    require_once('Public/Views/components/scripts.php');
    ?>
    
    <!-- jQuery  -->
    <script src="../../Assets/js/jquery.min.js" ></script>
    <script src="../../Assets/js/bootstrap.bundle.min.js" ></script>
    <script src="../../Assets/js/metismenu.min.js" ></script>
    <script src="../../Assets/js/jquery.slimscroll.js" ></script>
    <script src="../../Assets/js/waves.min.js" ></script>

    <!-- Parsley js -->
    <script src="../../Assets/plugins/parsleyjs/parsley.min.js"></script>


    <!-- App js -->
    <script src="../../Assets/js/app.js" ></script>
    <script src="../../Assets/js/functions/signIn.js" ></script>

    <script>
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
   
</body>


</html>
