<?php

    session_start();
    $_SESSION["ok"]=1;
    $user = $_SESSION["user"];

    $Logro = strtoupper(trim($_POST["Logros"]));



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

        //obteniendo datos
            //busco el id del profesor
                $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                $res = mysqli_query($conexion, $sql);
                $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                $numFilasUse = mysqli_num_rows($res);

            if ($numFilasUse == 1 ){//se registro bien el form4

                   $regpues = "INSERT INTO form5 (idprofesor,Premio) VALUES('$fila[1]','$Logro');";
                    $respues = mysqli_query($conexion, $regpues);
                    $numpues = mysqli_affected_rows($conexion);
                    if ($numpues == 1){//se registro bien el form4
                            $arreglo["resultado"] = 1;
                                $arreglo["mensaje"] = "Registrado el formulario";

                    }else{//error
                                $arreglo["resultado"] = 0;
                                $arreglo["mensaje"] = "Error registrando el formulario";
                    }

            }else{//error
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error Obteniendo datos";
            }



    }
        $respAx = json_encode($arreglo);
        echo $respAx;


?>
