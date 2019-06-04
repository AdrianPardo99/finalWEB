<?php
$query="select p.idprofesor,o.organizacion,f.ano,f.nvlpart from
profesor p, organizacion o, form10 f where f.idprofesor=p.idprofesor and
o.idorga=f.idorga and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
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
      <tbody>";
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
    <br>";
 ?>
