<?php

$hosts_aceptados = array('localhost','127.0.0.1','192.168.167.10');
$metodo_aceptado = 'POST';
$usuario_correcto = "Admin";
$password_correcto = "Admin";
$txt_usuario = $_POST["txt_usuario"];
$txt_password = $_POST["txt_password"];
$token = "";

if(in_array($_SERVER['HTTP_HOST'], $hosts_aceptados)){
    // Si se acepta ña dirección IP
    if($_SERVER["REQUEST_METHOD"] == $metodo_aceptado){
        // El metodo es acpetado
        if(isset($txt_usuario) && !empty($txt_usuario)){
            // EL CAMPO DE USUARIO EXISTE
            if(isset($txt_password) && !empty($txt_password)){
                // EL CAMPO PASSWORD EXISTE
                if($txt_usuario == $usuario_correcto){
                    // EL USUARIO DIGITADO ES EL CORECTO
                    if($txt_password == $password_correcto){
                         // LA CONTRASEÑA ES CORRECTA
                         $ruta = "welcome.php";
                         $msg = "";
                         $codigo_estado = 200;
                         $texto_estado = "OK";
                        // GENERAR UN TOKEN BASADO EN LA HORA ACTUAL
                        list($usec, $sec) = explode(' ', microtime());
                         $token = base64_encode(date("Y-m-d H_i:s",$sec).substr($usec,1));
                    } else {
                        $ruta = "";
                        $msg = "La contraseña digitada es incorrecta";
                        $codigo_estado = 412;
                        $texto_estado = "Precondition Failed";
                        $token = "";
                    }
                } else {
                    $ruta = "";
                    $msg = "El usuario digitado no está permitido";
                    $codigo_estado = 401;
                    $texto_estado = "Unauthorized";
                    $token = "";
                }
            } else {
                $ruta = "";
                $msg = "El campo 'password' no posee datos";
                $codigo_estado = 412;
                $texto_estado = "Precondition Failed";
                $token = "";     
            }
        } else {
            $ruta = "";
            $msg = "El campo 'usuario' no posee datos";
            $codigo_estado = 412;
            $texto_estado = "Precondition Failed";
            $token = "";
        }


    } else {
        $ruta = "";
        $msg = "El metodo HTTP no esta permitido";
        $codigo_estado = 405;
        $texto_estado = "Method not allowed";
        $token = "";
    }

} else {
    $ruta = "";
    $msg = "La direccion IP no está permitida";
    $codigo_estado = 406;
    $texto_estado = "No aceptable";
    $token = "";
}

$arreglo_respuesta = array(
  "status"=>((intval($codigo_estado)==200) ? "Succes": "error"),
  "error"=>((intval($codigo_estado)==200) ? "": array("code"=>$codigo_estado, "message"=>$msg)),
  "data" => array(
    "url"=>$ruta,
    "token"=>$token
  ),
  "count"=>1
);

header("HTTP/1.1".$codigo_estado." ".$texto_estado);
header("Content-Type: application/json");
echo($arreglo_respuesta);



?>