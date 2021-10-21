<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Cliente Interno</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
    <meta content="Themesdesign" name="author" />

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

</head>

<body>
    <?php
    require_once('Public/Views/vector/header.php');
    ?>

  
                     
                <!-- end page-title -->
                <div class="well well-sm text-right">
                    <a class="btn btn-primary" href="?c=admin&a=Nuevo">Nuevo Usuario</a>
                </div>
                <span>-</span>
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Usuarios registrados</h4>
                                <p class="sub-title"></code>
                                </p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Categoria</th>
                                            <th>Nombre</th>
                                            <th>Docuemento PDF</th>
                                            
                                        </tr>
                                    </thead>


                                    <tbody>

                                        <?php foreach ($this->model->Listar() as $r) : ?>
                                            <tr>
                                                <td><?php echo $r->categoria; ?></td>
                                                <td><?php echo $r->datospersonales; ?></td>

                                                <td><a href="/../../SenaSoftFinanzas/repository/<?php echo $r->categoria ?>/<?php echo $r->clienteexterno; ?>">PDF</a></td>
                                            
                                               
                                            </tr>

                                        <?php endforeach; ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->



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

                <!-- Required datatable js -->
                <script src="Public/Assets/plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="Public/Assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
                <!-- Buttons examples -->
                <script src="Public/Assets/plugins/datatables/dataTables.buttons.min.js"></script>
                <script src="Public/Assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
                <script src="Public/Assets/plugins/datatables/jszip.min.js"></script>
                <script src="Public/Assets/plugins/datatables/pdfmake.min.js"></script>
                <script src="Public/Assets/plugins/datatables/vfs_fonts.js"></script>
                <script src="Public/Assets/plugins/datatables/buttons.html5.min.js"></script>
                <script src="Public/Assets/plugins/datatables/buttons.print.min.js"></script>
                <script src="Public/Assets/plugins/datatables/buttons.colVis.min.js"></script>
                <!-- Responsive examples -->
                <script src="Public/Assets/plugins/datatables/dataTables.responsive.min.js"></script>
                <script src="Public/Assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

                <!-- Datatable init js -->
                <script src="Public/Assets/pages/datatables.init.js"></script>

                <!-- App js -->
                <script src="Public/Assets/js/app.js" defer></script>

</body>

</html>
