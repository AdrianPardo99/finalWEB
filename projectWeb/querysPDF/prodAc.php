<?php
$prodNum="1";
$prodDes="Tachas y perico pa la bandita";
    /*Aqui va el query de productos academicos*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Productos Académicos: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"25%\"><center>Num:</center></th>
        <th width=\"75%\"><center>Descripción del producto:</center></th>
      </thead>
      <tbody>
        <tr>
          <td width=\"25%\"><center>".$prodNum."</center></td>
          <td width=\"75%\"><center>".$prodDes."</center></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br>";
 ?>
