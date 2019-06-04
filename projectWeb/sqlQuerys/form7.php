<?php

    session_start();
    $_SESSION["ok"]=1;
    $user = $_SESSION["user"];


	$tact = strtoupper(trim($_POST["tipeAct"]));
    $ins = strtoupper(trim($_POST["instituReg"]));
	$pais = trim($_POST["state"]);
    $ano = trim($_POST["year"]);
    $hora = trim($_POST["hours"]);

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
                $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
				$res = mysqli_query($conexion, $sql);
				$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

				$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
				$res = mysqli_query($conexion, $sql);
				$institu = mysqli_fetch_array($res, MYSQLI_BOTH);


				$regpues = "INSERT INTO form7 (idprofesor,idinstitucion,Tactual,pais,ano,hora) VALUES('$fila[1]','$institu[0]','$tact','$pais','$ano','$hora');";
				$respues = mysqli_query($conexion, $regpues);
				$numpues = mysqli_affected_rows($conexion);
				if ($numpues == 1){//se registro bien el form4
						$arreglo["resultado"] = 1;
							$arreglo["mensaje"] = "Registrado el formulario";

				}
				else{//error
							$arreglo["resultado"] = 0;
							$arreglo["mensaje"] = "Error registrando el formulario";
				}
            }
			else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Institucion";
            }
        }
		else{//La instituciion esta registrada
  			$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
				$res = mysqli_query($conexion, $sql);
				$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

				$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
				$res = mysqli_query($conexion, $sql);
				$institu = mysqli_fetch_array($res, MYSQLI_BOTH);


				$regpues = "INSERT INTO form7 (idprofesor,idinstitucion,Tactual,pais,ano,hora) VALUES('$fila[1]','$institu[0]','$tact','$pais','$ano','$hora');";
				$respues = mysqli_query($conexion, $regpues);
				$numpues = mysqli_affected_rows($conexion);
				if ($numpues == 1){//se registro bien el form4
						$arreglo["resultado"] = 1;
							$arreglo["mensaje"] = "Registrado el formulario";

				}
				else{//error
							$arreglo["resultado"] = 0;
							$arreglo["mensaje"] = "Error registrando el formulario";
				}
		}
    }

        $respAx = json_encode($arreglo);
        echo $respAx;


?>
