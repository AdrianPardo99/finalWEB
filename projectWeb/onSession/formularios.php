<?php
include '../php/headerSession.php';
$var = "onsession";
include '../php/onsesionfilenav.php';
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
    $sql= "select*from profesor where idprofesor=".$idproUsr[1].";";
    $res = mysqli_query($conexion, $sql);
    $list= mysqli_fetch_array($res, MYSQLI_BOTH);
  }?>
<div class="row">
  <div class="col s12 m12 l12">
    <center><h4><?php echo "Bienvenido: ".$list[1]." ".$list[2]." ".$list[3];?></h4></center>
    <br>
    <div class="col s2 m2 l4"></div>
    <div class="col s8 m8 l4">
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Formaci&oacute;n</span> </center>
        </div>
        <div class="card-action">
          <center><a id="toFormacion" href="/projectWeb/onSession/formulario6.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform6.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Capacitaci&oacute;n</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario1.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform1.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Actualizaci&oacute;n Disciplinar</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario7.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform7.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Gesti&oacute;n acad&eacute;mica</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario2.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform2.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Productos acad&eacute;micos</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario8.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform8.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Experiencia no acad&eacute;mica</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario3.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform3.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Experiencia en diseño ingenieril</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario9.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform9.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Logros no acad&eacute;micos</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario4.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform4.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Membres&iacute;a</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario10.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform10.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Premios recibidos</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario5.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform5.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Participaci&oacute;n PE</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario11.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
          <br>
          <center><a id="deletelastFormacion" href="/projectWeb/dlQuerys/dform11.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Borrar ultimo dato <i class="fa fa-trash"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Generar PDF</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/pdfPHP/prueba.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Crear PDF <i class="fas fa-file-pdf"></i></a></center>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include '../php/footerSession.php';
}else{
  header("location:../php/login.php");
}?>
