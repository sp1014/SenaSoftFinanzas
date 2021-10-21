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