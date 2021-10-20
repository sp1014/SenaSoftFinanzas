<?php

// Include Composer autoloader if not already done.
require_once 'vendor/autoload.php';

/**
 * Función para subir las fotos al servidor
 * 
 * @return boolean true si se ha movido correctamente la imagen a la carpeta al servidor
 * @param array $foto Arreglo con las especificaciones de la imagen
 * @param string $nameFoto Nombre con el que se va a guardar la imagen
 * @author Edier Heraldo Hernandez Molano
 */
function uploadImages(array $foto, string $nameFoto, string $categoria)
{
    $url_tmp = $foto['tmp_name'];
    $destino = "repository";
    if (!file_exists($destino)) {
        mkdir($destino, 0777, true);
    }

    switch ($categoria) {
        case '1':
            $destino = 'repository/Tipos_documento';
            if (!file_exists($destino)) {
                mkdir($destino, 0777, true);
            }
            $destino = "repository/Tipos_documento/{$nameFoto}";
            break;
        case '2':
            $destino = 'repository/Facturas';
            if (!file_exists($destino)) {
                mkdir($destino, 0777, true);
            }
            $destino = "repository/Facturas/{$nameFoto}";
            break;
        case '3':
            $destino = 'repository/Cuentas_cobro';
            if (!file_exists($destino)) {
                mkdir($destino, 0777, true);
            }
            $destino = "repository/Cuentas_cobro/{$nameFoto}";
            break;
    }
    $move = move_uploaded_file($url_tmp, $destino);
    return $move;
}

function parser()
{
    $parseador = new \Smalot\PdfParser\Parser();
    $nombreDocumento = "documents/repository/documento_identidad.pdf";
    $documento = $parseador->parseFile($nombreDocumento);

    $paginas = $documento->getPages();
    foreach ($paginas as $indice => $pagina) {
        printf("<h1>Página #%02d</h1>", $indice + 1);
        $texto = $pagina->getText();
        echo "<pre>";
        echo $texto;
        echo "</pre>";
    }

    $imagenes = $documento->getObjectsByType('XObject', 'Image');
    foreach ($imagenes as $imagen) {
        printf("<h1>Una imagen</h1><img src=\"data:image/jpg;base64,%s\"/>", base64_encode($imagen->getContent()));
    }
}
