<!DOCTYPE html>
<html lang="es">

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

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <h4 class="page-title">Usuario</h4>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Usuario</a></li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div>
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
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Tipo Documento</th>
                                            <th>Numero Documento</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Clave</th>
                                            <th>Tipo de Rol</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        <?php foreach ($this->model->Listar() as $r) : ?>
                                            <tr>
                                                <td><?php echo $r->id; ?></td>
                                                <td><?php echo $r->nombre; ?></td>
                                                <td><?php echo $r->id_tipodocumento; ?></td>
                                                <td><?php echo $r->numero_documento; ?></td>
                                                <td><?php echo $r->telefono; ?></td>
                                                <td><?php echo $r->correo; ?></td>
                                                <td><?php echo $r->pass; ?></td>
                                                <td><?php echo $r->tipo_rol; ?></td>
                                                <td><?php echo $r->estado; ?></td>
                                                <td>

                                                    <a href="?c=admin&a=Crud&id=<?php echo $r->id; ?>" class="btn btn-primary">Editar</a>
                                                </td>
                                                <td>

                                                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=admin&a=Eliminar&id=<?php echo $r->id; ?>" class="btn btn-primary">Eliminar</a>
                                                </td>

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