<?php
    session_start();
    $user = trim($_POST["user"]);
    $pass = trim($_POST["pass"]);
    $crypt = hash('sha256',$pass);
    $url = "localhost";
    $usuarioBD = "root";
    $contraBD = "toor";
    $nomBD = "webdb";
    $conexion = mysqli_connect($url,$usuarioBD,$contraBD,$nomBD);

    $arreglo = array();

    if (mysqli_connect_errno($conexion)){
        $arreglo["resultado"] = 0;
        $arreglo["mensaje"] = "NO se logro la conexion";
    }else{
        mysqli_query($conexion,"set names 'utf8'");
        $sql = "SELECT*FROM usuario WHERE user='$user' AND pass = '$crypt';";
        $res = mysqli_query($conexion, $sql);
        $numFilas = mysqli_num_rows($res);


        if($numFilas == 0){
            $arreglo["resultado"] = 0;
            $arreglo["mensaje"] = "No estas registrado";
        }else{
            $arreglo["resultado"] = $numFilas;
            $arreglo["mensaje"] = "Bienvenido";
            $_SESSION["ok"] = 1;
        }

        $respAx = json_encode($arreglo);
        echo $respAx;
    }

?>
