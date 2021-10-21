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
                                <ol class="breadcrumb">
                                <li><a href="?c=admin">Usuarios</a></li>
                                <li class="active"><?php echo $pvd->id != null ? $pvd->nombre : 'Nuevo Registro'; ?></li>
                                </ol>
                                </div>
                            </div> <!-- end row -->
                        </div>
<div class="container">
  <div class="row">
    <div class="col-sm">
<h1 class="page-header">
    <?php echo $pvd->id != null ? $pvd->nombre : 'Nuevo Registro'; ?>
</h1>



<form id="frm-proveedor" action="?c=admin&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $pvd->id; ?>" />

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Tipo Documento</label>
        <input type="text" name="id_tipodocumento" value="<?php echo $pvd->id_tipodocumento; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Numero Documento</label>
        <input type="text" name="numero_documento" value="<?php echo $pvd->numero_documento; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefono" value="<?php echo $pvd->telefono; ?>" class="form-control"  data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $pvd->correo; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Clave</label>
        <input type="text" name="pass" value="<?php echo $pvd->pass; ?>" class="form-control" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Rol</label>
    
        <select name="tipo_rol"   value="<?php echo $pvd->tipo_rol; ?>">
            <option value="Administrador">Administrador</option>
            <option value="Cliente Interno">Cliente Interno</option>
            <option value="Cliente Externo">Cliente Externo</option>
            
        </select>
    </div>

    <div class="form-group">
        <label>Estado</label>
        <input type="text" name="estado" value="<?php echo $pvd->estado; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-admin").submit(function(){
            return $(this).validate();
        });
    })
</script>
