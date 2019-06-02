<?php
include '../php/headerSession.php';
$var = "onsession";
include '../php/onsesionfilenav.php';
session_start();
if($_SESSION["ok"] == 1){?>
<div class="col s12 m12 l12">
  <a href="../pdfPHP/prueba.php" class="btn-flat light-blue darken-2 waves-effect waves-teal white-text">Crear PDF <i class="fas fa-file-pdf"></i></a>
</div>
<?php
include '../php/footerSession.php';
}else{
  header("location:../php/login.php");
}?>
