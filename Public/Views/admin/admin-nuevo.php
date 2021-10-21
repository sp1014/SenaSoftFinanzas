<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=admin">Usuario</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-admin" action="?c=admin&a=Guardar" method="post" enctype="multipart/form-data">




    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control"  data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Tipo Documento</label>
       <!-- <input type="text" name="id_tipodocumento" value="" class="form-control"  data-validacion-tipo="requerido|min:100" />-->

        <select name="id_tipodocumento" value="<?php echo $pvd->id_tipodocumento; ?>">
            <option value="1">CC</option>
            <option value="2">TI</option>
            <option value="3">CE</option>
            <option value="4">RC</option>
            <option value="5">PA</option>
            
            
        </select>
    </div>

    <div class="form-group">
        <label>Numero Docuemnto</label>
        <input type="text" name="numero_documento" value="<?php echo $pvd->numero_documento; ?>" class="form-control"  data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $pvd->telefono; ?>" class="form-control"  data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $pvd->correo; ?>" class="form-control"  data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Clave</label>
        <input type="text" name="pass" value="<?php echo $pvd->pass; ?>" class="form-control" data-validacion-tipo="requerido|min:10" />
    </div>

    <div class="form-group">
        <label>Rol</label>
        <select name="tipo_rol" value="<?php echo $pvd->tipo_rol; ?>">
            <option value="Administrador">Administrador</option>
            <option value="Cliente Interno">Cliente Interno</option>
            <option value="Cliente Externo">Cliente Externo</option>
           
            
            
        </select>
    
    
    </div>

    <div class="form-group">
        <label>Estado</label>
        <select name="estado" value="<?php echo $pvd->estado; ?>">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        
            
        </select>
    
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-admin").submit(function(){
            return $(this).validate();
        });
    })
</script>
