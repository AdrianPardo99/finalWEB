<?php

    session_start();
    $_SESSION["ok"]=1;
    $user = $_SESSION["user"];

    $cap = trim($_POST["typeCap"]);
    $ins = strtoupper(trim($_POST["instituReg"]));
    $pais = trim($_POST["state"]);
    $ano = trim($_POST["year"]);
    $horas = trim($_POST["hours"]);


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
        $sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
        $res = mysqli_query($conexion, $sql);
        $numFilas = mysqli_num_rows($res);


        if($numFilas == 0){//No esta Reg la institucion
            $regpues = "INSERT INTO institucion (institucion) VALUES('$ins');";
            $respues = mysqli_query($conexion, $regpues);
            $numpues = mysqli_affected_rows($conexion);

            if ($numpues == 1){//se registro bien

                $sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
                $res = mysqli_query($conexion, $sql);
                $filas = mysqli_fetch_array($res, MYSQLI_BOTH);
                //busco el id del profesor
                    $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                    $res = mysqli_query($conexion, $sql);
                    $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                //registro la capacitacion
                 $regcap =  "insert into capacitacion (pais,horas,año,idinstitucion,tipcap,idprofesor) values('$pais','$horas','$ano','$filas[0]','$cap','$fila[1]');";
                $rescap = mysqli_query($conexion, $regcap);
                $numprof = mysqli_affected_rows($conexion);


                if ($numprof == 1){//Registro bien la cap
                        $arreglo["resultado"] = 1;
                        $arreglo["mensaje"] = "Se guardado tu informacion ".$user;
                }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Capacitacion";
                    }
            }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Institucion";
                    }
        }else{
        $sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
                $res = mysqli_query($conexion, $sql);
                $filas = mysqli_fetch_array($res, MYSQLI_BOTH);
                //busco el id del profesor
                    $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                    $res = mysqli_query($conexion, $sql);
                    $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                //registro la capacitacion
                 $regcap =  "insert into capacitacion (pais,horas,año,idinstitucion,tipcap,idprofesor) values('$pais','$horas','$ano','$filas[0]','$cap','$fila[1]');";
                $rescap = mysqli_query($conexion, $regcap);
                $numprof = mysqli_affected_rows($conexion);


                if ($numprof == 1){//Registro bien la cap
                        $arreglo["resultado"] = 1;
                        $arreglo["mensaje"] = "Se guardado tu informacion ".$user;
                }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Capacitacion";
                    }
        }
    }
        $respAx = json_encode($arreglo);
        echo $respAx;


?>
