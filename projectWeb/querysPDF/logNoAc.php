<?php
$query="select p.idprofesor, f.Logro from form4 f, profesor p where
p.idprofesor=f.idprofesor and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
    /*Aquí va el query de logros no profesionales*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Logros no profesionales: </p>
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
