<?php
$nombre="Adrian";
$apeP="Gonzalez";
$apeM="Pardo";
$edad="20";
$fNac="05/10/1999";
$puesto="Alumno";
/*Aquí va el query de la consulta del nombre completo*/
$varHTML=$varHTML."
<div class=\"col s12 m12 l12\">
<table width=\"100%\" class=\"col s12 m12 l12\">
  <thead>
    <th width=\"33%\"><center>Apellido Paterno</center></th>
    <th width=\"33%\"><center>Apellido Materno:</center></th>
    <th width=\"33%\"><center>Nombre(s):</center></th>
  </thead>
  <tbody>
    <tr>
      <td width=\"33%\"><center>".$apeP."</center></td>
      <td width=\"33%\"><center>".$apeM."</center></td>
      <td width=\"33%\"><center>".$nombre."</center></td>
    </tr>
  </tbody>
  </table>
</div>";
/*Aqui va el query de edad fecha de nacimiento y puesto*/
$varHTML=$varHTML."
<div class=\"col s12 m12 l12\">
<table width=\"100%\" class=\"col s12 m12 l12\">
  <thead>
    <th width=\"33%\"><center>Edad:</center></th>
    <th width=\"33%\"><center>Fecha de nacimiento:</center></th>
    <th width=\"33%\"><center>Puesto en la institución:</center></th>
  </thead>
  <tbody>
    <tr>
      <td width=\"33%\"><center>".$edad."</center></td>
      <td width=\"33%\"><center>".$fNac."</center></td>
      <td width=\"33%\"><center>".$puesto."</center></td>
    </tr>
  </tbody>
  </table>
</div>
<br>";?>
