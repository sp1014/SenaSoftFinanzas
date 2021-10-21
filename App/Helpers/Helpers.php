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
        imageToText2($rutaImg);
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

function imageToText2(string $img_base_64)
{
    $data = 'data:image/png;base64,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';
    $data = str_replace('data:image/png;base64,', '', $data);
    $data = str_replace(' ', '+', $data);
    $data = base64_decode($data);
    $file = 'images/' . rand() . '.png';
    $success = file_put_contents($file, $data);
    $data = base64_decode($data);
    $source_img = imagecreatefromstring($data);
    $rotated_img = imagerotate($source_img, 90, 0);
    $file = 'images/' . rand() . '.png';
    $imageSave = imagejpeg($rotated_img, $file, 10);
    imagedestroy($source_img);
    exit();



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
