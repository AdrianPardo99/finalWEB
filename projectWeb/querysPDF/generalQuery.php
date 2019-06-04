<?php
$query="select p.idprofesor,p.APP,p.APM,p.Nombre,p.Edad,p.FechaNA,g.Puesto
from profesor p, gestion g, usuario u where p.idprofesor=u.idprofesor and
p.idgestion=g.idgestion and p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
$fila = mysqli_fetch_array($res, MYSQLI_BOTH);
/*Aquí va el query de la consulta del nombre completo*/
$varHTML=$varHTML."
<div class=\"col s12 m12 l12\">
<table width=\"100%\" class=\"col s12 m12 l12\">
  <tbody>
    <tr>
      <th width=\"33%\"><center>Apellido Paterno:</center></th>
      <th width=\"33%\"><center>Apellido Materno:</center></th>
      <th width=\"33%\"><center>Nombre(s):</center></th>
    </tr>
    <tr>
      <td width=\"33%\"><center>".$fila[1]."</center></td>
      <td width=\"33%\"><center>".$fila[2]."</center></td>
      <td width=\"33%\"><center>".$fila[3]."</center></td>
    </tr>
  </tbody>
  </table>
</div>";
/*Aqui va el query de edad fecha de nacimiento y puesto*/
$varHTML=$varHTML."
<div class=\"col s12 m12 l12\">
<table width=\"100%\" class=\"col s12 m12 l12\">
  <tbody>
    <tr>
      <th width=\"33%\"><center>Edad:</center></th>
      <th width=\"33%\"><center>Fecha de nacimiento:</center></th>
      <th width=\"33%\"><center>Puesto en la institución:</center></th>
    </tr>
    <tr>
      <td width=\"33%\"><center>".$fila[4]."</center></td>
      <td width=\"33%\"><center>".$fila[5]."</center></td>
      <td width=\"33%\"><center>".$fila[6]."</center></td>
    </tr>
  </tbody>
  </table>
</div>
<br>";?>
