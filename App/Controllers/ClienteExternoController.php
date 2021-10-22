<?php

class ClienteExternoController
{
    /**
     * Método constructor que carga el archivo del modelo que va a estar asociado. 
     */
    public function __construct()
    {
        session_start();
        require_once('App/Models/ClienteExterno.php');
    }
    /**
     * Carga la vista de index
     */
    public function index()
    {
        if (!isset($_SESSION['login'])) {
            header('Location: ' . URL . '?c=Login&a=index');
        }
        $data['tittle'] = 'Cargar documentos | Finacialfast';
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

    public function getTiposDocumento()
    {
        $model = new ClienteExterno();
        $request = $model->getTiposDocumento();
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
        $response = [];
        $keyWordTipoDocumento = ['identificación', 'identidad', 'cédula', 'repÚblica'];
        $keyWordFactura = ['factura', 'número de factura', 'factura:', 'referencia'];
        $keyWordCuentaCobro = ['cuenta', 'cobro', 'cuenta cobro', 'cuenta de cobro'];
        $arrDir =  getDirectory('repository');
        if (!empty($arrDir)) {
            foreach ($arrDir as $file) {
                $text = strtolower(parserPdf($file));
                if (!empty($text)) {
                    $arrText = explode(' ', $text);
                    foreach ($arrText as $text) {
                        foreach ($keyWordTipoDocumento as $tipoDoc) {
                            $tipoDoc = trim($tipoDoc);
                            if ($text == $tipoDoc) {
                                // echo "Encontro alguna concordancia con: " . $tipoDoc;
                                $r = true;
                                $destino = 'repository/Tipos_documento';
                                if (!file_exists($destino)) {
                                    mkdir($destino, 0777, true);
                                }
                                $destino = trim(getcwd() . '\repository\Tipos_documento\ ') . $file;
                                $path = trim(getcwd() . '\repository\ ') . $file;
                                if (file_exists($path)) {
                                    $arrResp = ['status' => true, 'msg' => "El archivo $file ha sigo guardado en el directorio Tipo_documento. Además que esta en formato texto"];
                                    copy($path, $destino);
                                    unlink($path);
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
                                    // echo "Encontro alguna concordancia con: " . $factura;
                                    $r = true;
                                    $destino = 'repository/Facturas';
                                    if (!file_exists($destino)) {
                                        mkdir($destino, 0777, true);
                                    }
                                    $destino = trim(getcwd() . '\repository\Facturas\ ') . $file;
                                    $path = trim(getcwd() . '\repository\ ') . $file;
                                    if (file_exists($path)) {
                                        $arrResp = ['status' => true, 'msg' => "El archivo $file ha sigo guardado en el directorio Factura. Además que esta en formato texto"];
                                        copy($path, $destino);
                                        unlink($path);
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
                                    // echo "Encontro alguna concordancia con: " . $cuentaC;
                                    $r = true;
                                    $destino = 'repository/Cuentas_cobro';
                                    if (!file_exists($destino)) {
                                        mkdir($destino, 0777, true);
                                    }
                                    $destino = trim(getcwd() . '\repository\Cuentas_cobro\ ') . $file;
                                    $path = trim(getcwd() . '\repository\ ') . $file;
                                    if (file_exists($path)) {
                                        $arrResp = ['status' => true, 'msg' => "El archivo $file ha sigo guardado en el directorio Cuenta_cobro. Además que esta en formato texto"];
                                        copy($path, $destino);
                                        unlink($path);
                                    }
                                } else {
                                    $r = false;
                                }
                            }
                        }
                    }
                } else {
                    $image = strtolower(parserImage($file));
                    $arrTextImage = explode(' ', $image);
                    // format($arrTextImage);
                    foreach ($arrTextImage as $text) {
                        foreach ($keyWordTipoDocumento as $tipoDoc) {
                            // echo $text . '<br>';
                            // echo  '<b>' . $tipoDoc . '</b><br>';
                            if ($text == $tipoDoc) {
                                // echo "Encontro alguna concordancia con: " . $tipoDoc;
                                $r = true;
                                $destino = 'repository/Tipos_documento';
                                if (!file_exists($destino)) {
                                    mkdir($destino, 0777, true);
                                }
                                $destino = trim(getcwd() . '\repository\Tipos_documento\ ') . $file;
                                $path = trim(getcwd() . '\repository\ ') . $file;
                                if (file_exists($path)) {
                                    $arrResp = ['status' => true, 'msg' => "El archivo $file ha sigo guardado en el directorio Tipo_documento. Además que esta en formato gráfico"];
                                    copy($path, $destino);
                                    unlink($path);
                                }
                            } else {
                                $r = false;
                            }
                        }
                    }

                    if ($r == false) {
                        foreach ($arrTextImage as $text) {
                            foreach ($keyWordFactura as $factura) {
                                // echo $text . '<br>';
                                // echo '<b>' . $factura . '</b><br>';
                                if ($text == $factura) {
                                    // echo "Encontro alguna concordancia con: " . $factura;
                                    $r = true;
                                    $destino = 'repository/Facturas';
                                    if (!file_exists($destino)) {
                                        mkdir($destino, 0777, true);
                                    }
                                    $destino = trim(getcwd() . '\repository\Facturas\ ') . $file;
                                    $path = trim(getcwd() . '\repository\ ') . $file;
                                    if (file_exists($path)) {
                                        $arrResp = ['status' => true, 'msg' => "El archivo $file ha sigo guardado en el directorio Factura. Además que esta en formato gráfico"];
                                        copy($path, $destino);
                                        unlink($path);
                                    }
                                } else {
                                    $r = false;
                                }
                            }
                        }
                    }
                    if ($r == false) {
                        foreach ($arrTextImage as $text) {
                            foreach ($keyWordCuentaCobro as $cuentaC) {
                                // echo $text . '<br>';
                                // echo '<b>' . $cuentaC . '<b/><br>';
                                if ($text == $cuentaC) {
                                    // echo "Encontro alguna concordancia con: " . $cuentaC;
                                    $r = true;
                                    $destino = 'repository/Cuentas_cobro';
                                    if (!file_exists($destino)) {
                                        mkdir($destino, 0777, true);
                                    }
                                    $destino = trim(getcwd() . '\repository\Cuentas_cobro\ ') . $file;
                                    $path = trim(getcwd() . '\repository\ ') . $file;
                                    if (file_exists($path)) {
                                        $arrResp = ['status' => true, 'msg' => "El archivo $file ha sigo guardado en el directorio Cuenta_cobro. Además que esta en formato gráfico"];
                                        copy($path, $destino);
                                        unlink($path);
                                    }
                                } else {
                                    $r = false;
                                }
                            }
                        }
                    }
                }
                array_push($response, $arrResp);
            }
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
        } else {
            $arrResp = ['status' => true, 'msg' => 'Respositorio vació. Todos los archivos han sido movidos a sus respectivos directorios !!'];
            array_push($response, $arrResp);
            echo json_encode($response, JSON_UNESCAPED_UNICODE);
        }
    }
}
