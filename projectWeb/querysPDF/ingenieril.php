<?php
$query="select p.idprofesor, o.organizacion, f.ano, f.expe
from profesor p, organizacion o, form9 f where p.idprofesor=f.idprofesor and
f.idorga=o.idorga and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
    /*Aqui va el query de experiencia ingenieril*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Experiencia en diseño ingenieril: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"33%\"><center></center></th>
        <th width=\"33%\"><center></center></th>
        <th width=\"33%\"><center></center></th>
      </thead>
      <tbody>
          <tr>
            <th width=\"33%\"><center>Organismo:</center></th>
            <th width=\"33%\"><center>Periodo Años:</center></th>
            <th width=\"33%\"><center>Nivel de experiencia:</center></th>
          </tr>";
      while($fila=mysqli_fetch_array($res)){
        $varHTML=$varHTML."<tr>
          <td width=\"33%\"><center>".$fila[1]."</center></td>
          <td width=\"33%\"><center>".$fila[2]."</center></td>
          <td width=\"33%\"><center>".$fila[3]."</center></td>
        </tr>";
      }
      $varHTML=$varHTML."</tbody>
      </table>
    </div>
    <br>"; ?>
