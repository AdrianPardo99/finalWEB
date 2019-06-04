<?php

    session_start();
    $_SESSION["ok"]=1;
    $user = $_SESSION["user"];

    $act = strtoupper(trim($_POST["activity"]));
    $ins = strtoupper(trim($_POST["Org"]));
    $de = trim($_POST["de"]);
    $ah = trim($_POST["a"]);


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
        mysqli_query($conexion,"set names 'utf8'");
        $sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
        $res = mysqli_query($conexion, $sql);
        $numFilas = mysqli_num_rows($res);

        if($numFilas == 0){//No esta Reg la Organizacion
            $regpues = "INSERT INTO organizacion (organizacion) VALUES('$ins');";
            $respues = mysqli_query($conexion, $regpues);
            $numpues = mysqli_affected_rows($conexion);

            if ($numpues == 1){//se registro bien la institucion
                        $rest = substr($act, 1);
                $sql = "SELECT * FROM gestion WHERE Puesto like '_$rest%' ;";
                $res = mysqli_query($conexion, $sql);
                $numFilas = mysqli_num_rows($res);

                if($numFilas == 0){//No esta reg el puesto
                        $regpues = "INSERT INTO gestion (Puesto) VALUES('$act');";
                        $respues = mysqli_query($conexion, $regpues);
                        $numpues = mysqli_affected_rows($conexion);
                        if ($numpues == 1){//se registro bien el puesto
                                    //obteniendo datos
                                //busco el id del profesor
                                    $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasUse = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $institu = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasinst = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM gestion WHERE Puesto = '$act' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $puest = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasges = mysqli_num_rows($res);



                                if ($numFilasUse == 1 && $numFilasinst==1 && $numFilasges==1){//se registro bien el form3

                                       $regpues = "INSERT INTO form3 (idprofesor,idorga,idgestion,fechade,fechaA) VALUES('$fila[1]','$institu[0]','$puest[0]','$de','$ah');";
                                        $respues = mysqli_query($conexion, $regpues);
                                        $numpues = mysqli_affected_rows($conexion);
                                        if ($numpues == 1){//se registro bien el form2
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
                        }else{//Error registrando el puesto
                                    $arreglo["resultado"] = 0;
                                    $arreglo["mensaje"] = "Error registrando Puesto";
                        }
                }else{//esta registrado el puesto
                             //obteniendo datos
                                //busco el id del profesor
                                    $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasUse = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $institu = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasinst = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM gestion WHERE Puesto = '$act' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $puest = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasges = mysqli_num_rows($res);



                                if ($numFilasUse == 1 && $numFilasinst==1 && $numFilasges==1){//se registro bien el form2

                                       $regpues = "INSERT INTO form3 (idprofesor,idorga,idgestion,fechade,fechaA) VALUES('$fila[1]','$institu[0]','$puest[0]','$de','$ah');";
                                        $respues = mysqli_query($conexion, $regpues);
                                        $numpues = mysqli_affected_rows($conexion);
                                        if ($numpues == 1){//se registro bien el form2
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


            }else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Institucion";
                    }
        }else{//esta registrada la Organizacion
                $rest = substr($act, 1);
                $sql = "SELECT * FROM gestion WHERE Puesto like '_$rest%' ;";
                $res = mysqli_query($conexion, $sql);
                $numFilas = mysqli_num_rows($res);

                if($numFilas == 0){//No esta reg el puesto
                        $regpues = "INSERT INTO gestion (Puesto) VALUES('$act');";
                        $respues = mysqli_query($conexion, $regpues);
                        $numpues = mysqli_affected_rows($conexion);
                        if ($numpues == 1){//se registro bien el puesto
                                    //obteniendo datos
                                //busco el id del profesor
                                    $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasUse = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $institu = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasinst = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM gestion WHERE Puesto = '$act' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $puest = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasges = mysqli_num_rows($res);



                                if ($numFilasUse == 1 && $numFilasinst==1 && $numFilasges==1){//se registro bien el form2

                                       $regpues = "INSERT INTO form3 (idprofesor,idorga,idgestion,fechade,fechaA) VALUES('$fila[1]','$institu[0]','$puest[0]','$de','$ah');";
                                        $respues = mysqli_query($conexion, $regpues);
                                        $numpues = mysqli_affected_rows($conexion);
                                        if ($numpues == 1){//se registro bien el form2
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
                        }else{//Error registrando el puesto
                                    $arreglo["resultado"] = 0;
                                    $arreglo["mensaje"] = "Error registrando Puesto";
                        }
                }else{//esta registrado el puesto
                             //obteniendo datos
                                //busco el id del profesor
                                    $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $fila = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasUse = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM organizacion WHERE organizacion = '$ins' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $institu = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasinst = mysqli_num_rows($res);
                                //busco el id del institucion
                                    $sql = "SELECT * FROM gestion WHERE Puesto = '$act' ;";
                                    $res = mysqli_query($conexion, $sql);
                                    $puest = mysqli_fetch_array($res, MYSQLI_BOTH);
                                    $numFilasges = mysqli_num_rows($res);



                                if ($numFilasUse == 1 && $numFilasinst==1 && $numFilasges==1){//se registro bien el form2

                                       $regpues = "INSERT INTO form3 (idprofesor,idorga,idgestion,fechade,fechaA) VALUES('$fila[1]','$institu[0]','$puest[0]','$de','$ah');";
                                        $respues = mysqli_query($conexion, $regpues);
                                        $numpues = mysqli_affected_rows($conexion);
                                        if ($numpues == 1){//se registro bien el form2
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



        }
    }
        $respAx = json_encode($arreglo);
        echo $respAx;


?>
