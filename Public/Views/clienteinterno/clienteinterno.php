<h1 class="page-header">Documentos Pdf</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Categoria</th>
            <th style="width:180px;">Nombre</th>
            <th style="width:120px;">Documento</th>
           
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->categoria; ?></td>
            <td><?php echo $r->datospersonales; ?></td>
            <td><a href="archivos/<?php echo $r->clienteexterno; ?>">PDF</a></td>
           
           
        
         
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
