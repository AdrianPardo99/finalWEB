<?php
$memOrg="IEEE";
$memAnios="20";
$memPar="Mucha segun la bandita";
    /*Aquí va el query de membresias*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Membresias: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"33%\"><center>Organismo:</center></th>
        <th width=\"33%\"><center>Periodo Años:</center></th>
        <th width=\"33%\"><center>Nivel de participación:</center></th>
      </thead>
      <tbody>
        <tr>
          <td width=\"33%\"><center>".$memOrg."</center></td>
          <td width=\"33%\"><center>".$memAnios."</center></td>
          <td width=\"33%\"><center>".$memPar."</center></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br>";
 ?>
