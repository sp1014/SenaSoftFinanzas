<?php

class ClienteExternoController
{
    /**
     * Método constructor que carga el archivo del modelo que va a estar asociado. 
     */
    public function __construct()
    {
        require_once('App/Models/ClienteExterno.php');
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        $data['tittle'] = 'Cargar documentos | Finanzal Fast';
        require_once('Public/Views/clienteexterno/clienteexterno.php');
    }

    public function insert()
    {
        if ($_POST) {
            if (empty($_POST['txtCategoria'])) {
                $arrResp = ['status' => false, 'msg' => 'Todos los campos son obligatorios !!'];
            } else {
                $model = new ClienteExterno();
                $categorie = trim($_POST['txtCategoria']);
                $datosPersonales =  '1'; //$_SESSION['sessionLogin']
                //guardar datos de la foto
                $foto = $_FILES['txtFile'];
                $nameFoto = $foto['name'];
                $filePdf = 'file_' . md5(date('d-m-Y H:m:s')) . '.pdf';

                $request = $model->new($filePdf, $datosPersonales, $categorie);
                if (intval($request) > 0) {
                    //cargar y guardar la imagen en el servidor
                    //Almacenar la imagen en la carpeta del servidor
                    if (!empty($nameFoto)) {
                        uploadImages($foto, $filePdf, $categorie);
                    }
                    $arrResp = ['status' => true, 'msg' => 'Transacción realizada con exito :)'];
                } elseif ($request == 'exists') {
                    $arrResp = ['status' => false, 'msg' => 'Este usuario ya tiene asociado un archivo con este nombre.'];
                } else {
                    $arrResp = ['status' => false, 'msg' => 'Ha ocurrido un error. Por favor intente nuevamente'];
                }
            }
            echo json_encode($arrResp, JSON_UNESCAPED_UNICODE);
        }
        die();
    }

    public function getCategorias()
    {
        $model = new ClienteExterno();
        $request = $model->getCategorias();
        if (!empty($request)) {
            $arrResp = ['status' => true, 'data' => $request];
        } else {
            $arrResp = ['status' => false, 'data' => 'no'];
        }
        echo json_encode($arrResp, JSON_UNESCAPED_UNICODE);
        die();
    }

    public function parser()
    {
        $arrDir =  getDirectory('repository');
        print_r($arrDir);
        if (!empty($arrDir)) {
            foreach ($arrDir as $file) {
                $text = strtolower(parserPdf($file));
                if (!empty($text)) {
                    $arrText = explode(' ', $text);
                    $keyWordTipoDocumento = ['identificación', 'identidad', 'cédula'];
                    $keyWordFactura = ['factura', 'número de factura', 'factura:', 'referencia'];
                    $keyWordCuentaCobro = ['cuenta', 'cobro', 'cuenta cobro', 'cuenta de cobro'];

                    foreach ($arrText as $text) {
                        foreach ($keyWordTipoDocumento as $tipoDoc) {
                            if ($text == $tipoDoc) {
                                echo "Encontro alguna concordancia con: " . $tipoDoc;
                                $r = true;
                                $destino = 'repository/Tipos_documento';
                                if (!file_exists($destino)) {
                                    mkdir($destino, 0777, true);
                                }
                                $destino = trim(getcwd() . '\repository\Tipos_documento\ ') . $file;
                                $path = trim(getcwd() . '\repository\ ') . $file;
                                if (file_exists($path)) {
                                    if (copy($path, $destino) && unlink($path)) {
                                        echo '<br>';
                                        echo "<b>El archivo ha sido movido y eliminado. Tipos de documento</b>";
                                        echo '<br />';
                                    }
                                }
                            } else {
                                $r = false;
                            }
                        }
                    }
                    if ($r == false) {
                        foreach ($arrText as $text) {
                            foreach ($keyWordFactura as $factura) {
                                if ($text == $factura) {
                                    echo "Encontro alguna concordancia con: " . $factura;
                                    $r = true;
                                    $destino = 'repository/Facturas';
                                    if (!file_exists($destino)) {
                                        mkdir($destino, 0777, true);
                                    }
                                    $destino = trim(getcwd() . '\repository\Facturas\ ') . $file;
                                    $path = trim(getcwd() . '\repository\ ') . $file;
                                    if (file_exists($path)) {
                                        if (copy($path, $destino) && unlink($path)) {
                                            echo '<br>';
                                            echo "<b>El archivo ha sido movido y eliminado. Facturas</b>";
                                            echo '<br />';
                                        }
                                    }
                                } else {
                                    $r = false;
                                }
                            }
                        }
                    }
                    if ($r == false) {
                        foreach ($arrText as $text) {
                            foreach ($keyWordCuentaCobro as $cuentaC) {
                                if ($text == $cuentaC) {
                                    echo "Encontro alguna concordancia con: " . $cuentaC;
                                    $r = true;
                                    $destino = 'repository/Cuentas_cobro';
                                    if (!file_exists($destino)) {
                                        mkdir($destino, 0777, true);
                                    }
                                    $destino = trim(getcwd() . '\repository\Cuentas_cobro\ ') . $file;
                                    $path = trim(getcwd() . '\repository\ ') . $file;
                                    if (file_exists($path)) {
                                        if (copy($path, $destino) && unlink($path)) {
                                            echo '<br>';
                                            echo "<b>El archivo ha sido movido y eliminado. Cuentas de cobro.</b>";
                                            echo '<br />';
                                        }
                                    }
                                } else {
                                    $r = false;
                                }
                            }
                        }
                    }
                } else {
                    // $textImg = imageToText2();
                    // echo '<br /><br />' . $textImg . '<br/><br />';
                }
            }
        }
    }

    public function parserImage()
    {
        $image = parserImage('documento_identidad.pdf');
    }
}
