<?php
$query="select p.idprofesor, f.descrip from
profesor p, form8 f where f.idprofesor=p.idprofesor and
p.idprofesor=".$idproUsr[1].";";
$con=1;
$res = mysqli_query($conexion, $query);
    /*Aqui va el query de productos academicos*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Productos Académicos: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"25%\"><center></center></th>
        <th width=\"75%\"><center></center></th>
      </thead>
      <tbody>
        <tr>
          <th width=\"25%\"><center>Num:</center></th>
          <th width=\"75%\"><center>Descripción del producto:</center></th>
        </tr>";
      while($fila=mysqli_fetch_array($res)){
        $varHTML=$varHTML."<tr>
          <td width=\"25%\"><center>".$con++."</center></td>
          <td width=\"75%\"><center>".$fila[1]."</center></td>
        </tr>";
      }
      $varHTML=$varHTML."</tbody>
      </table>
    </div>
    <br>";
 ?>
