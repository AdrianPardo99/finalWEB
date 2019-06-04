<?php
session_start();
if($_SESSION["ok"] == 1){
require 'pdfcrowd.php';
include 'index.php';
/*Cambia la ruta de var y todo eso para que jale en winbugs*/
  try{
    $client = new \Pdfcrowd\HtmlToPdfClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");
    $client->convertFileToFile(__DIR__."/".$user."pdfFile.html", $user."pdfCasei.pdf");
    unlink(__DIR__."/".$user."pdfFile.html");
    header("location:/projectWeb/pdfPHP/".$user."pdfCasei.pdf");

  }catch(\Pdfcrowd\Error $why){
    error_log("Pdfcrowd Error: {$why}\n");
    throw $why;
  }
}else{
  header("location:/projectWeb/php/login.php");
}
 ?>
