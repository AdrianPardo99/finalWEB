<?php
$query="select p.idprofesor, g.puesto, i.institucion, f.fechade,
f.fechaA from profesor p, institucion i, gestion g, form2 f where
p.idprofesor=f.idprofesor and f.idinstitucion=i.idinstitucion and
g.idgestion=f.idgestion and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
    /*Aqui va el query de gestion academica*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Gestión Académica: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"25%\"><center>Actividad o Puesto:</center></th>
        <th width=\"25%\"><center>Institución:</center></th>
        <th width=\"25%\"><center>De:</center></th>
        <th width=\"25%\"><center>A:</center></th>
      </thead>
      <tbody>";
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
