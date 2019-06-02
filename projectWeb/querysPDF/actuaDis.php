<?php
$actType="Curso de uso de herramientas para hackiar como los grandes :vvv";
$instiPAct="Instituto Politecnico Nacional ESCOM, México";
$anioAct="2019";
$horasAct="120";
    /*Aqui va el query de actualización docente*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Actualización Disciplinar: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"25%\"><center>Tipo de Actualización:</center></th>
        <th width=\"25%\"><center>Institución y País:</center></th>
        <th width=\"25%\"><center>Año de obtención:</center></th>
        <th width=\"25%\"><center>Horas:</center></th>
      </thead>
      <tbody>
        <tr>
          <td width=\"25%\"><center>".$actType."</center></td>
          <td width=\"25%\"><center>".$instiPAct."</center></td>
          <td width=\"25%\"><center>".$anioAct."</center></td>
          <td width=\"25%\"><center>".$horasAct."</center></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br>"; ?>
