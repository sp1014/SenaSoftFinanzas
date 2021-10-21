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

<div class="row  d-flex justify-content-center">
                    <div class="col-lg-4">
                        <div class="card m-b-30">
                            <div class="card-body">


<div class="containe row  d-flex justify-content-center">
  <div class="row">
    <div class="col-sm col-lg-12">
<h1 class="page-header">
    <?php echo $pvd->id != null ? $pvd->nombre : 'Nuevo Registro'; ?>
</h1>



<form id="frm-proveedor" action="?c=admin&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $pvd->id; ?>" />

    <div class="form-group">
        <label>Nombre</label>
        <input required type="text" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Tipo Documento</label>
        <input required type="text" name="id_tipodocumento" value="<?php echo $pvd->id_tipodocumento; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Numero Documento</label>
        <input required type="text" name="numero_documento" readonly value="<?php echo $pvd->numero_documento; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input required type="text" name="telefono" value="<?php echo $pvd->telefono; ?>" class="form-control"  data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input required type="text" name="correo" readonly value="<?php echo $pvd->correo; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Clave</label>
        <input required type="text" name="pass" value="<?php echo $pvd->pass; ?>" class="form-control" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Rol</label>
    
        <select name="tipo_rol" class="form-select form-control" readonly  value="<?php echo $pvd->tipo_rol; ?>">
            <option value="Administrador">Administrador</option>
            <option value="Cliente Interno">Cliente Interno</option>
            <option value="Cliente Externo">Cliente Externo</option>
            
        </select>
    </div>

    <div class="form-group">
        <label>Estado</label>
        <input required type="text" name="estado" value="<?php echo $pvd->estado; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
         <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light">
                     Actualizar
                </button>
        </div>
</form>

</div>
</div>
</div> </div></div></div></div>
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
