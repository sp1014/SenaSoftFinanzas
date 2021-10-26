<?php

// Include Composer autoloader if not already done.
require_once 'vendor/autoload.php';

/**
 * Función para subir las fotos al servidor.
 * @return boolean true si se ha movido correctamente la el archivos a la carpeta en el servidor.
 * @param array $foto Arreglo con las especificaciones del archivo que se va almacenar.
 * @param string $nameFoto Nombre con el que se va a guardar el archivo.
 * @param string $categoria Id de la categoria con la que esta asociada el archivo que el usuario subio.
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

function parserPdf(string $nombre_documento)
{
    $parser = new \Smalot\PdfParser\Parser();
    $nombreDocumento = "repository/$nombre_documento";
    $pdf = $parser->parseFile($nombreDocumento);
    $text = $pdf->getText();
    return $text;
}

function parserImage(string $nombre_documento)
{
    $parseador = new \Smalot\PdfParser\Parser();
    $nombreDocumento = "repository/$nombre_documento";
    $documento = $parseador->parseFile($nombreDocumento);

    $imagenes = $documento->getObjectsByType('XObject', 'Image');
    foreach ($imagenes as $imagen) {
        // $rutaImg = "data:image/png;base64," . base64_encode($imagen->getContent());
        return imageToText2(base64_encode($imagen->getContent()));
        // printf("<img name=\"image\" id=\"image\" src=\"data:image/jpg;base64,%s\"/>", base64_encode($imagen->getContent()));
    }
}


/**
 * Funcion que muestra la estructura de carpetas a partir de la ruta dada.
 * @param string $ruta Ruta relativa donde se encuentran los archivos que queremos escanaer y obtener el nombre.
 * @return array $arrInfoDir Contiene el nombre de los archivos con extensión .pdf que se encuentran dentro del directorio.
 */

function getDirectory($ruta)
{
    $arrInfoDir = [];
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false) {
            $ruta_completa = $ruta . "/" . $archivo;
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                $extension = pathinfo($ruta_completa, PATHINFO_EXTENSION);
                if ($extension == 'pdf') {
                    // Si es un directorio se recorre recursivamente
                    array_push($arrInfoDir, $archivo);
                }
            }
        }
        // Cierra el gestor de directorios
        closedir($gestor);
        return $arrInfoDir;
    }
}

function imageToText2(string $img_base_64)
{
    // Define the Base64 value you need to save as an image
    $b64 = $img_base_64;
    // Obtain the original content (usually binary data)
    $bin = base64_decode($b64);
    // Load GD resource from binary data
    $im = imageCreateFromString($bin);

    // Make sure that the GD library was able to load the image
    // This is important, because you should not miss corrupted or unsupported images
    if (!$im) {
        die('Base64 value is not a valid image');
    }

    // Specify the location where you want to save the image
    $img_file = 'images/filename.png';

    // Save the GD resource as PNG in the best possible quality (no compression)
    // This will strip any metadata or invalid contents (including, the PHP backdoor)
    // To block any possible exploits, consider increasing the compression level
    $resultConvertImage =  imagepng($im, $img_file, 0);
    if ($resultConvertImage) {
        $ubicacionImagen = trim(getcwd() . '\images\filename.png');
        $comando = "tesseract " . escapeshellarg($ubicacionImagen) . " stdout -l spa -c debug_file=/dev/null";
        exec($comando, $textoDetectado, $codigoSalida);
        if ($codigoSalida === 0) {
            // Tenemos el texto como un array, podemos unirlo
            return join("\n", $textoDetectado);
        } else {
            return "Error" . $codigoSalida;
        }
    }
    imagedestroy($im);
}

function format($format)
{
    echo '<pre>';
    print_r($format);
    echo '</pre>';
}
