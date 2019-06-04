<?php

    session_start();
    $_SESSION["ok"]=1;
        $user = $_SESSION["user"];

    $url = $_SERVER['SERVER_ADDR'];
        $usuarioBD = "root";
        $contraBD = "toor";
            $nomBD = "webdb";
            $conexion = mysqli_connect($url,$usuarioBD,$contraBD,$nomBD);

              $arreglo = array();

                if (mysqli_connect_errno($conexion)){
                          $arreglo["resultado"] = 0;
                          $arreglo["mensaje"] = "NO se logro la conexion";
                }else{
                  $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                  $res = mysqli_query($conexion, $sql);
                  $fila = mysqli_fetch_array($res, MYSQLI_BOTH);

                  $sql = "SELECT * FROM form6 WHERE idprofesor = '$fila[1]';";
                  $res = mysqli_query($conexion, $sql);
                  while($fila=mysqli_fetch_array($res)){
                    $last=$fila[0];
                  }

                  $sql = "delete from form6 where idform6 = '$last';";
                  $res = mysqli_query($conexion, $sql);
                 }
                 header("location:/projectWeb/onSession/");
?>
