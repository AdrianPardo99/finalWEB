<?php

    session_start();
    $_SESSION["ok"]=1;
    $user = $_SESSION["user"];

    $part = trim($_POST["participation"]);
    $ins = strtoupper(trim($_POST["org"]));
    $ano = trim($_POST["year"]);

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
        $sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
        $res = mysqli_query($conexion, $sql);
        $numFilas = mysqli_num_rows($res);

        if($numFilas == 0){//No esta Reg la Organizacion
            $regpues = "INSERT INTO organizacion (organizacion) VALUES('$ins');";
            $respues = mysqli_query($conexion, $regpues);
            $numpues = mysqli_affected_rows($conexion);

            if ($numpues == 1){//se registro bien la institucion
                $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                $res = mysqli_query($conexion, $sql);
                $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                $numFilasUse = mysqli_num_rows($res);

				$sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
        		$res = mysqli_query($conexion, $sql);
				$orga = mysqli_fetch_array($res, MYSQLI_BOTH);


            if ($numFilasUse == 1 ){//se registro bien el form4

                   $regpues = "INSERT INTO form10 (idprofesor,idorga,ano,nvlpart) VALUES('$fila[1]','$orga[0]','$ano','$part');";
                    $respues = mysqli_query($conexion, $regpues);
                    $numpues = mysqli_affected_rows($conexion);
                    if ($numpues == 1){//se registro bien el form4
                            $arreglo["resultado"] = 1;
                                $arreglo["mensaje"] = "Registrado el formulario";

                    }else{//error
                                $arreglo["resultado"] = 0;
                                $arreglo["mensaje"] = "Error registrando el formulario";
                    }
            }else{
				$arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando ";
			}
			}else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Organizacion";
                    }
        }
		else{//esta registrada la Organizacion
              $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                $res = mysqli_query($conexion, $sql);
                $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                $numFilasUse = mysqli_num_rows($res);

				$sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
        		$res = mysqli_query($conexion, $sql);
				$orga = mysqli_fetch_array($res, MYSQLI_BOTH);


            if ($numFilasUse == 1 ){//se registro bien el form4

                   $regpues = "INSERT INTO form10 (idprofesor,idorga,ano,nvlpart) VALUES('$fila[1]','$orga[0]','$ano','$part');";
                    $respues = mysqli_query($conexion, $regpues);
                    $numpues = mysqli_affected_rows($conexion);
                    if ($numpues == 1){//se registro bien el form4
                            $arreglo["resultado"] = 1;
                                $arreglo["mensaje"] = "Registrado el formulario";

                    }else{//error
                                $arreglo["resultado"] = 0;
                                $arreglo["mensaje"] = "Error registrando el formulario";
                    }
            }else{
				$arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando ";
			}

        }
    }
        $respAx = json_encode($arreglo);
        echo $respAx;


?>
