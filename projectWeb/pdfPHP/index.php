<?php
$varHTML="<!DOCTYPE html>
<html lang=\"es\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/projectWeb/css/materialize.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/projectWeb/css/my2.css\">
    <link href=\"/projectWeb/css/all.css\" rel=\"stylesheet\">
    <script type = \"text/javascript\" src = \"/projectWeb/js/jquery-3.4.1.min.js\"></script>
    <script type = \"text/javascript\" src=\"/projectWeb/js/materialize.js\"></script>
    <script type = \"text/javascript\" src=\"/projectWeb/js/myJS.js\"></script>
    <title>PDF</title>
  </head>
  <body>
  <div class=\"row\">
    <div class=\"col s12 m12 l12\">
        <div >
        </div>
        <div >
          <center><p>Formato de CASEI (CV)</p></center>
        </div>
        <div class=\"col s4 l4 m4\">
        </div>
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
echo file_put_contents("pdfFile.html",$varHTML);
 ?>
