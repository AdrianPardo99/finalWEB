<?php
$nivelAc="L";
$nombreEs="Ingenieria en sistemas computacionales";
$InstiPAc="Instituto Politecnico Nacional, México";
$anioAc="2022";
$cedula="000000";

    /*Aquí va el query de la formación academica*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Formación Academica:</p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"20%\"><center>Nivel:</center></th>
        <th width=\"20%\"><center>Nombre (especialidad):</center></th>
        <th width=\"20%\"><center>Institución y País:</center></th>
        <th width=\"20%\"><center>Año de obtención:</center></th>
        <th width=\"20%\"><center>Cedula profesiona:</center></th>
      </thead>
      <tbody>
        <tr>
          <td width=\"20%\"><center>".$nivelAc."</center></td>
          <td width=\"20%\"><center>".$nombreEs."</center></td>
          <td width=\"20%\"><center>".$InstiPAc."</center></td>
          <td width=\"20%\"><center>".$anioAc."</center></td>
          <td width=\"20%\"><center>".$cedula."</center></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br>"; ?>
