<?php
session_start();
if($_SESSION["ok"] == 1){
include 'index.php';
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($varHTML);
$mpdf->Output();
}else{
  header("location:/projectWeb/php/login.php");
}
 ?>
