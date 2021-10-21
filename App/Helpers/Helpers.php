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
        $rutaImg = "data:image/jpg;base64," . base64_encode($imagen->getContent());
        $img =  "<img src='$rutaImg' />";
        // $lengthImage =  printf("<img name=\"image\" id=\"image\" src=\"data:image/jpg;base64,%s\"/>", base64_encode($imagen->getContent()));
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

/**
 * Función que sirve para leer una imagen y extraer el texto que tiene.
 * @param string $file_name nombre del archivo (imagen) del cual se quiere leer el contenido.
 */
function imageToText()
{
    $file_name = 'factura.png';
    $file_tmp = 'repository/';
    move_uploaded_file($file_tmp, "images/" . $file_name);

    shell_exec('"C:\\Program Files\\Tesseract-OCR\\tesseract" "C:\\xampp\\htdocs\\SenaSoftFinanzas\\repository\\images\\' . $file_name . '" out');

    echo "<br><h3>OCR after reading</h3><br><pre>";

    $myfile = fopen("out.txt", "r") or die("Unable to open file!");
    $information = fread($myfile, filesize("out.txt"));
    $keyWords = ['tarjeta', 'identidad', 'identificación', 'documento'];
    echo $information . '<br/>';
    $arrInfo = explode(' ', $information);
    foreach ($arrInfo as $info) {
        foreach ($keyWords as $words) {
            if ($info == $words) {
                echo "Se ha encontrado una concordancia, las palabras: " . $info;
            }
        }
    }
    print_r($arrInfo);
    fclose($myfile);
    echo "</pre>";
}

function imageToText2()
{
    $imagen = $_FILES["imagen"];
    $ubicacionImagen = $imagen["tmp_name"];
    echo '<br/><br/>' . $ubicacionImagen . '<br/><br/>';
    $comando = "tesseract " . escapeshellarg($ubicacionImagen) . " stdout -l spa -c debug_file=/dev/null";
    exec($comando, $textoDetectado, $codigoSalida);
    if ($codigoSalida === 0) {
        echo "El texto detectado es: ";
        // Tenemos el texto como un array, podemos unirlo
        $textoComoCadena = join("\n", $textoDetectado);
        echo "<pre>";
        echo $textoComoCadena;
        echo "</pre>";
    } else {
        echo "Error detectando texto. Por favor verifique que la imagen existe y que el programa de detección está instalado y es accesible desde PHP. El código de salida es: " . $codigoSalida;
    }
}
