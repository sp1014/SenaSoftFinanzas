<body>
    <?php
    require_once('Public/Views/vector/header.php');
    ?>
    <link rel="shortcut icon" href="Public/Assets/images/icono.png">
    <link href="Public/Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="Public/Assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="Public/Assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="Public/Assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="Public/Assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />




    
                <!-- end page-title -->

                <div class="row  d-flex justify-content-center">
                    <div class="col-lg-5">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <form id="frm-admin" action="?c=categoria&a=Guardar" method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control" required />
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

                    <script defer>
                        $(document).ready(function() {
                            $('form').parsley();
                        });
                    </script>
</body>