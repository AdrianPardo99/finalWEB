<?php
$query="select p.idprofesor, f.parti from profesor p, form11 f where
f.idprofesor=p.idprofesor and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
$fila=mysqli_fetch_array($res);
    /*Aquí va el query del PE*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Participación en el PE: </p>
    <table width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"33%\"><center></center></th>
        <th width=\"33%\"><center>Descripción:</center></th>
        <th width=\"33%\"><center></center></th>
      </thead>
      <tbody>
        <tr>
          <td width=\"33%\"><center></center></td>
          <td width=\"33%\"><center>".$fila[1]."</center></td>
          <td width=\"33%\"><center></center></td>
        </tr>
      </tbody>
      </table>
    </div>
    <br>"; ?>
