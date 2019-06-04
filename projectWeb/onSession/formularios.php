<?php
include '../php/headerSession.php';
$var = "onsession";
include '../php/onsesionfilenav.php';
session_start();
if($_SESSION["ok"] == 1){?>
<div class="row">
  <div class="col s12 m12 l12">
    <div class="col s2 m2 l4"></div>
    <div class="col s8 m8 l4">
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Formaci&oacute;n</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario6.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Capacitaci&oacute;n</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario1.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Actualizaci&oacute;n Disciplinar</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario7.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Gesti&oacute;n acad&eacute;mica</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario2.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Productos acad&eacute;micos</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario8.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Experiencia no acad&eacute;mica</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario3.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Experiencia ingenieril</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario9.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Logros no acad&eacute;micos</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario4.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Membres&iacute;a</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario10.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Premios recibidos</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario5.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
        </div>
      </div>
      <br>
      <div class="card black darken-1">
        <div class="card-content white-text">
          <center> <span class="card-title">Participaci&oacute;n PE</span> </center>
        </div>
        <div class="card-action">
          <center>  <a id="toFormacion" href="/projectWeb/onSession/formulario11.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text"><i class="fas fa-door-open"></i></a></center>
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
