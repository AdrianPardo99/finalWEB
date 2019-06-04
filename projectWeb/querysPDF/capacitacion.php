<?php
$query="select p.idprofesor, c.tipcap, concat(i.institucion,' ',c.pais),
c.año, c.horas from capacitacion c, profesor p, institucion i where
p.idprofesor=c.idprofesor and i.idinstitucion=c.idinstitucion and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);
    /*Aqui va el query de la capacitación docente*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Capacitación Docente: </p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"25%\"><center></center></th>
        <th width=\"25%\"><center></center></th>
        <th width=\"25%\"><center></center></th>
        <th width=\"25%\"><center></center></th>
      </thead>
      <tbody>
        <tr>
          <th width=\"25%\"><center>Tipo de capacitación:</center></th>
          <th width=\"25%\"><center>Institución y País:</center></th>
          <th width=\"25%\"><center>Año de obtención:</center></th>
          <th width=\"25%\"><center>Horas:</center></th>
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
