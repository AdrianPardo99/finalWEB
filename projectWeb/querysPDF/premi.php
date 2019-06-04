<?php
$query="select p.idprofesor, f.Premio from profesor p, form5 f where
f.idprofesor=p.idprofesor and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
    /*Aquí va el query de premios recibidos*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Premios recibidos:</p>
    <table width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"33%\"><center></center></th>
        <th width=\"33%\"><center>Descripción:</center></th>
        <th width=\"33%\"><center></center></th>
      </thead>
      <tbody>";
      while($fila=mysqli_fetch_array($res)){
        $varHTML=$varHTML."<tr>
          <td width=\"33%\"><center></center></td>
          <td width=\"33%\"><center>".$fila[1]."</center></td>
          <td width=\"33%\"><center></center></td>
        </tr>";
      }
      $varHTML=$varHTML."</tbody>
      </table>
    </div>
    <br>"; ?>
