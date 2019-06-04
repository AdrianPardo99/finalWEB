<?php
$query="select p.idprofesor, g.puesto, o.organizacion, f.fechade, f.fechaA
from profesor p, form3 f, gestion g, organizacion o where
p.idprofesor=f.idprofesor and g.idgestion=f.idgestion and o.idorga=f.idorga and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
    /*Aqui va el query de experiencia no Academica*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Experiencia no académica: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"25%\"><center></center></th>
        <th width=\"25%\"><center></center></th>
        <th width=\"25%\"><center></center></th>
        <th width=\"25%\"><center></center></th>
      </thead>
      <tbody>
        <tr>
          <th width=\"25%\"><center>Actividad o Puesto:</center></th>
          <th width=\"25%\"><center>Organización:</center></th>
          <th width=\"25%\"><center>De:</center></th>
          <th width=\"25%\"><center>A:</center></th>
        </tr>";
      while($fila=mysqli_fetch_array($res)){
        $varHTML=$varHTML."<tr>
          <td width=\"25%\"><center>".$fila[1]."</center></td>
          <td width=\"25%\"><center>".$fila[2]."</center></td>
          <td width=\"25%\"><center>".$fila[3]."</center></td>
          <td width=\"25%\"><center>".$fila[4]."</center></td>
        </tr>";
      }
      $varHTML=$varHTML."</tbody>
      </table>
    </div>
    <br>"; ?>
