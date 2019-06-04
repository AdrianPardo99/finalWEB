<?php
session_start();
if($_SESSION["ok"] == 1){
$url = $_SERVER['SERVER_ADDR'];
$usuarioBD = "root";
$contraBD = "toor";
$nomBD = "webdb";
$user = $_SESSION["user"];
$conexion = mysqli_connect($url,$usuarioBD,$contraBD,$nomBD);
mysqli_query($conexion,"set names 'utf8'");

$arreglo = array();

if (mysqli_connect_errno($conexion)){
  $arreglo["resultado"] = 0;
  $arreglo["mensaje"] = "NO se logro la conexion";
  header("location:/projectWeb/");
}else{
  $sql = "SELECT * FROM usuario WHERE user = '$user' ;";
  $res = mysqli_query($conexion, $sql);
  $idproUsr = mysqli_fetch_array($res, MYSQLI_BOTH);
$varHTML="<!DOCTYPE html>
<html lang=\"es\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/projectWeb/css/my2.css\">
    <title>PDF".$user."</title>
  </head>
  <body>
  <div class=\"row\">
    <div class=\"col s12 m12 l12\">
      <table width=\"100%\">
        <thead>
          <th width=\"33%\"><center></center></th>
          <th width=\"33%\"><center></center></th>
          <th width=\"33%\"><center></center></th>
        </thead>
        <tbody>
          <tr>
            <th width=\"33%\"><center></center></th>
            <th width=\"33%\"><center><p>Formato de CASEI (CV)</p></center></th>
            <th width=\"33%\"><center></center></th>
          </tr>
        </tbody>
      </table>
        <br>
    </div>";

include '../querysPDF/generalQuery.php';
include '../querysPDF/formacionAc.php';
include '../querysPDF/capacitacion.php';
include '../querysPDF/actuaDis.php';
include '../querysPDF/gestion.php';
include '../querysPDF/prodAc.php';
include '../querysPDF/expNoAca.php';
include '../querysPDF/ingenieril.php';
include '../querysPDF/logNoAc.php';
include '../querysPDF/memb.php';
include '../querysPDF/premi.php';
include '../querysPDF/PEfile.php';
    $varHTML=$varHTML."</div>
    </body>
    </html>";
}
}else{
  header("location:/projectWeb/php/login.php");
} ?>
