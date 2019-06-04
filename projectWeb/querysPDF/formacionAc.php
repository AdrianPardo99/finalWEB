<?php
$query="select p.idprofesor,substring(l.nivel,1,1),e.especialidad,
concat(i.institucion,' ',f.pais),f.ano, f.cedula from
form6 f, institucion i,especialidad e, lvledu l, profesor p
where p.idprofesor=f.idprofesor and l.ideducativo=f.ideducativo and
i.idinstitucion=f.idinstitucion and e.idespecialidad=f.idespecialidad and
p.idprofesor=".$idproUsr[1].";";
$res = mysqli_query($conexion, $query);

    /*Aquí va el query de la formación academica*/
    $varHTML=$varHTML."
    <div class=\"col s12 m12 l12\">
    <p>Formación Academica:</p>
    <table border=\"1\" width=\"100%\" class=\"col s12 m12 l12\">
      <thead>
        <th width=\"20%\"><center></center></th>
        <th width=\"20%\"><center></center></th>
        <th width=\"20%\"><center></center></th>
        <th width=\"20%\"><center></center></th>
        <th width=\"20%\"><center></center></th>
      </thead>
      <tbody>
        <tr>
          <th width=\"20%\"><center>Nivel:</center></th>
          <th width=\"20%\"><center>Nombre (especialidad):</center></th>
          <th width=\"20%\"><center>Institución y País:</center></th>
          <th width=\"20%\"><center>Año de obtención:</center></th>
          <th width=\"20%\"><center>Cedula profesiona:</center></th>
        </tr>";
        while($fila = mysqli_fetch_array($res)){
          $varHTML=$varHTML."<tr>
          <td width=\"20%\"><center>".$fila[1]."</center></td>
          <td width=\"20%\"><center>".$fila[2]."</center></td>
          <td width=\"20%\"><center>".$fila[3]."</center></td>
          <td width=\"20%\"><center>".$fila[4]."</center></td>
          <td width=\"20%\"><center>".$fila[5]."</center></td></tr>";
        }
        $varHTML=$varHTML."</tr>
      </tbody>
      </table>
    </div>
    <br>"; ?>
