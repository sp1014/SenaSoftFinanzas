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

<h1 class="page-header">Usuario</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=admin&a=Nuevo">Nuevo Usuario</a>
    
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">Tipo Documento</th>
            <th style="width:120px;">Numero Documento</th>
            <th style="width:120px;">Telefono</th>
            <th style="width:120px;">Correo</th>
            <th style="width:120px;">Clave</th>
            <th style="width:120px;">Tipo de Rol</th>
            <th style="width:120px;">Estado</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
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
                <a href="?c=admin&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=admin&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

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
</body>

</html>