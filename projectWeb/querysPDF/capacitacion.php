<?php
$capType="Curso de uso de herramientas";
$instiPCap="Instituto Politecnico Nacional ESCOM, México";
$anioCap="2019";
$horasCap="20";
    /*Aqui va el query de la capacitación docente*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Capacitación Docente: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"25%\"><center>Tipo de capacitación:</center></th>
        <th width=\"25%\"><center>Institución y País:</center></th>
        <th width=\"25%\"><center>Año de obtención:</center></th>
        <th width=\"25%\"><center>Horas:</center></th>
      </thead>
      <tbody>
        <tr>
          <td width=\"25%\"><center>".$capType."</center></td>
          <td width=\"25%\"><center>".$instiPCap."</center></td>
          <td width=\"25%\"><center>".$anioCap."</center></td>
          <td width=\"25%\"><center>".$horasCap."</center></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br>"; ?>
