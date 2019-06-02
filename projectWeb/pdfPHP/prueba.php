<?php
require 'pdfcrowd.php';
include 'index.php';
/*Cambia la ruta de var y todo eso para que jale en winbugs*/
  try{
    $client = new \Pdfcrowd\HtmlToPdfClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");
    $client->convertFileToFile("/var/www/html/projectWeb/pdfPHP/pdfFile.html", "pdfCasei.pdf");
    header("location:/projectWeb/pdfPHP/pdfCasei.pdf");
  }catch(\Pdfcrowd\Error $why){
    error_log("Pdfcrowd Error: {$why}\n");
    throw $why;
  }
 ?>
