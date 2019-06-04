<?php
    $user = trim($_POST["user"]);
    $Nom = trim($_POST["nameU"]);
    $app = trim($_POST["app"]);
    $apm = trim($_POST["apm"]);
    $age = trim($_POST["age"]);
    $fecha = trim($_POST["fecha"]);
    $puesto = trim($_POST["puesto"]);
    $pass = trim($_POST["pass1"]);//cifrar
    $mail = trim($_POST["correo"]);
    $url = $_SERVER['SERVER_ADDR'];
    $usuarioBD = "root";
    $contraBD = "toor";
    $nomBD = "webdb";
    $conexion = mysqli_connect($url,$usuarioBD,$contraBD,$nomBD);
    $crypt = hash('sha256',$pass);
    $arreglo = array();
    if (mysqli_connect_errno($conexion)){
        $arreglo["resultado"] = 0;
        $arreglo["mensaje"] = "NO se logro la conexion";
    }else{
        mysqli_query($conexion,"set names 'utf8'");
        $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
        $res = mysqli_query($conexion, $sql);
        $numFilas = mysqli_num_rows($res);
        if($numFilas == 0){
        $rest = substr($puesto, 1);
        $sql = "SELECT * FROM gestion WHERE puesto like '_$rest%' ;";
        $res = mysqli_query($conexion, $sql);
        $numFilas = mysqli_num_rows($res);


        if($numFilas == 0){//No esta reg el puesto
            $regpues = "INSERT INTO gestion (puesto) VALUES('$puesto');";
            $respues = mysqli_query($conexion, $regpues);
            $numpues = mysqli_affected_rows($conexion);
            if ($numpues == 1){//se registro bien
                $rest = substr($puesto, 1, -1);
                $sql = "SELECT * FROM gestion WHERE puesto like '_$rest%' ;";
                $res = mysqli_query($conexion, $sql);
                $filas = mysqli_fetch_array($res, MYSQLI_BOTH);
                //registro el profesor
                 $regprof =  "insert into profesor (Nombre,APP,APM,Edad,FechaNA,idgestion,email) values('$Nom','$app','$apm','$age','$fecha','$filas[0]','$mail');";
                $resprof = mysqli_query($conexion, $regprof);
                $numprof = mysqli_affected_rows($conexion);


                if ($numprof == 1){
                    //busco el numero de profesor
                    $sql = "SELECT * FROM profesor WHERE nombre = '$Nom' and app = '$app' and apm = '$apm' and edad = '$age';";
                    $res = mysqli_query($conexion, $sql);
                    $filas = mysqli_fetch_array($res, MYSQLI_BOTH);
                     //registro el usuario
                    $reguss =  "insert into usuario (idprofesor,user,pass) values('$filas[0]','$user','$crypt');";
                    $resuss = mysqli_query($conexion, $reguss);
                    $numuss = mysqli_affected_rows($conexion);
                    if ($numuss == 1){
                        $arreglo["resultado"] = 1;
                        $arreglo["mensaje"] = "Registrado";
                    }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando usuario";
                    }
                }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Profesor 1";
                    }
            }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Puesto";
                    }
        }else{
                $rest = substr($puesto, 1);
                $sql = "SELECT * FROM gestion WHERE puesto like '_$rest%' ;";
                $res = mysqli_query($conexion, $sql);
                $filas = mysqli_fetch_array($res, MYSQLI_BOTH);
                //registro el profesor
                $regprof =  "insert into profesor (Nombre,APP,APM,Edad,FechaNA,idgestion,email) values('$Nom','$app','$apm','$age','$fecha','$filas[0]','$mail');";
                $resprof = mysqli_query($conexion, $regprof);
                $numprof = mysqli_affected_rows($conexion);


                if ($numprof == 1){
                   //busco el numero de profesor
                    $sql = "SELECT * FROM profesor WHERE nombre = '$Nom' and app = '$app' and apm = '$apm' and edad = '$age';";
                    $res = mysqli_query($conexion, $sql);
                    $numFilas = mysqli_num_rows($res);
                    $filas = mysqli_fetch_array($res, MYSQLI_BOTH);
                     //registro el usuario
                    $reguss =  "insert into usuario (idprofesor,user,pass) values('$filas[0]','$user','$crypt');";
                    $resuss = mysqli_query($conexion, $reguss);
                    $numuss = mysqli_affected_rows($conexion);
                    if ($numuss == 1){
                        $arreglo["resultado"] = 1;
                        $arreglo["mensaje"] = "Registrado";
                    }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando usuario";
                    }
                }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Profesor 2";
                    }
        }

        }else{
            $arreglo["resultado"] = 0;
            $arreglo["mensaje"] = "usuario existente";
        }
        $respAx = json_encode($arreglo);
        echo $respAx;
    }

?>
