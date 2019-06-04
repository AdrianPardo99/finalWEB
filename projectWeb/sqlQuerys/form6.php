<?php

    session_start();
    $_SESSION["ok"]=1;
    $user = $_SESSION["user"];

    $lvlesp = strtoupper(trim($_POST["nespecilidad"]));
	$espe = strtoupper(trim($_POST["espe"]));

    $ins = strtoupper(trim($_POST["instituReg"]));
	$pais = trim($_POST["state"]);
    $ano = trim($_POST["year"]);
    $cedula = trim($_POST["cedula"]);


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
        $sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
        $res = mysqli_query($conexion, $sql);
        $numFilas = mysqli_num_rows($res);


        if($numFilas == 0){//No esta Reg la institucion
            $regpues = "INSERT INTO institucion (institucion) VALUES('$ins');";
            $respues = mysqli_query($conexion, $regpues);
            $numpues = mysqli_affected_rows($conexion);

            if ($numpues == 1){//se registro bien

                			$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
							$res = mysqli_query($conexion, $sql);
							$numFilas = mysqli_num_rows($res);


							if($numFilas == 0){//No esta Reg la lvlesp
								$regpues = "INSERT INTO lvledu (nivel) VALUES('$lvlesp');";
								$respues = mysqli_query($conexion, $regpues);
								$numpues = mysqli_affected_rows($conexion);

								if ($numpues == 1){//se registro bien lvlespe
											$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
											$res = mysqli_query($conexion, $sql);
											$numFilas = mysqli_num_rows($res);


											if($numFilas == 0){//No esta Reg la esp
												$regpues = "INSERT INTO especialidad (Especialidad) VALUES('$espe');";
												$respues = mysqli_query($conexion, $regpues);
												$numpues = mysqli_affected_rows($conexion);

												if ($numpues == 1){//se registro bien espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6 (idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
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
															$arreglo["mensaje"] = "Error registrando la Especialidad";
												}
											}
											else{//esta registrada la espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6 (idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano,) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
													$respues = mysqli_query($conexion, $regpues);
													$numpues = mysqli_affected_rows($conexion);
													if ($numpues == 1){//se registro bien el form4
															$arreglo["resultado"] = 1;
																$arreglo["mensaje"] = "Registrado el formulario";

													}else{//error
																$arreglo["resultado"] = 0;
																$arreglo["mensaje"] = "Error registrando el formulario";
													}
											}

								}
								else{
											$arreglo["resultado"] = 0;
											$arreglo["mensaje"] = "Error registrando nivel de esp";
								}
							}
							else{//esta registrada el lvl espe
								$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
											$res = mysqli_query($conexion, $sql);
											$numFilas = mysqli_num_rows($res);


											if($numFilas == 0){//No esta Reg la esp
												$regpues = "INSERT INTO especialidad (Especialidad) VALUES('$espe');";
												$respues = mysqli_query($conexion, $regpues);
												$numpues = mysqli_affected_rows($conexion);

												if ($numpues == 1){//se registro bien espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6 (idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
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

												}else{
															$arreglo["resultado"] = 0;
															$arreglo["mensaje"] = "Error registrando la Especialidad";
												}
											}else{//esta registrada la espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6 (idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
													$respues = mysqli_query($conexion, $regpues);
													$numpues = mysqli_affected_rows($conexion);
													if ($numpues == 1){//se registro bien el form4
															$arreglo["resultado"] = 1;
																$arreglo["mensaje"] = "Registrado el formulario";

													}else{//error
																$arreglo["resultado"] = 0;
																$arreglo["mensaje"] = "Error registrando el formulario";
													}
											}
							}
            }
			else{
                        $arreglo["resultado"] = 0;
                        $arreglo["mensaje"] = "Error registrando Institucion";
            }
        }
		else{//La instituciion esta registrad
  			$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
							$res = mysqli_query($conexion, $sql);
							$numFilas = mysqli_num_rows($res);


							if($numFilas == 0){//No esta Reg la lvlesp
								$regpues = "INSERT INTO lvledu (nivel) VALUES('$lvlesp');";
								$respues = mysqli_query($conexion, $regpues);
								$numpues = mysqli_affected_rows($conexion);

								if ($numpues == 1){//se registro bien lvlespe
											$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
											$res = mysqli_query($conexion, $sql);
											$numFilas = mysqli_num_rows($res);


											if($numFilas == 0){//No esta Reg la esp
												$regpues = "INSERT INTO especialidad (Especialidad) VALUES('$espe');";
												$respues = mysqli_query($conexion, $regpues);
												$numpues = mysqli_affected_rows($conexion);

												if ($numpues == 1){//se registro bien espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6 (idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
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
															$arreglo["mensaje"] = "Error registrando la Especialidad";
												}
											}else{//esta registrada la espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6 (idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
													$respues = mysqli_query($conexion, $regpues);
													$numpues = mysqli_affected_rows($conexion);
													if ($numpues == 1){//se registro bien el form4
															$arreglo["resultado"] = 1;
																$arreglo["mensaje"] = "Registrado el formulario";

													}else{//error
																$arreglo["resultado"] = 0;
																$arreglo["mensaje"] = "Error registrando el formulario";
													}
											}

								}else{
											$arreglo["resultado"] = 0;
											$arreglo["mensaje"] = "Error registrando nivel de esp";
								}
							}else{//esta registrada el lvl espe
								$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
											$res = mysqli_query($conexion, $sql);
											$numFilas = mysqli_num_rows($res);


											if($numFilas == 0){//No esta Reg la esp
												$regpues = "INSERT INTO especialidad (Especialidad) VALUES('$espe');";
												$respues = mysqli_query($conexion, $regpues);
												$numpues = mysqli_affected_rows($conexion);

												if ($numpues == 1){//se registro bien espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6 (idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
													$respues = mysqli_query($conexion, $regpues);
													$numpues = mysqli_affected_rows($conexion);
													if ($numpues == 1){//se registro bien el form4
															$arreglo["resultado"] = 1;
																$arreglo["mensaje"] = "Registrado el formulario";

													}else{//error
																$arreglo["resultado"] = 0;
																$arreglo["mensaje"] = "Error registrando el formulario regEsp";
													}

												}else{
															$arreglo["resultado"] = 0;
															$arreglo["mensaje"] = "Error registrando la Especialidad";
												}
											}else{//esta registrada la espe
													$sql = "SELECT * FROM usuario WHERE user = '$user' ;";
													$res = mysqli_query($conexion, $sql);
													$fila = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM institucion WHERE institucion = '$ins' ;";
													$res = mysqli_query($conexion, $sql);
													$institu = mysqli_fetch_array($res, MYSQLI_BOTH);

                									$sql = "SELECT * FROM lvledu WHERE nivel = '$lvlesp' ;";
													$res = mysqli_query($conexion, $sql);
													$edu = mysqli_fetch_array($res, MYSQLI_BOTH);

													$sql = "SELECT * FROM especialidad WHERE Especialidad = '$espe' ;";
													$res = mysqli_query($conexion, $sql);
													$espec = mysqli_fetch_array($res, MYSQLI_BOTH);


													$regpues = "INSERT INTO form6(idprofesor,ideducativo,idEspecialidad,idinstitucion,cedula,pais,ano) VALUES('$fila[1]','$edu[0]','$espec[0]','$institu[0]','$cedula','$pais','$ano');";
													$respues = mysqli_query($conexion, $regpues);
													$numpues = mysqli_affected_rows($conexion);
													if ($numpues == 1){//se registro bien el form4
															$arreglo["resultado"] = 1;
																$arreglo["mensaje"] = "Registrado el formulario";

													}else{//error
																$arreglo["resultado"] = 0;
																$arreglo["mensaje"] = "Error registrando el formulario".mysqli_error($conexion);
													}
											}
							}
		}
    }
        $respAx = json_encode($arreglo);
        echo $respAx;


?>
