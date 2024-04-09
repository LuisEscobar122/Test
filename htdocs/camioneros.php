<h3>camioneros</h3>
<a href="/">Regresar</a>
<br/><br>

<input type="submit" value="insertar">

<?php
  include 'camionero/camioneros.php';
  $camioneros = listar_camioneros(); 
  echo '<table border="1"';
  echo '<tr>';
  echo '<th>dni</th>';
  echo '<th>Nombre</th>';
  echo '<th>Telefono</th>';
  echo '<th>Direccion</th>';
  echo '<th>Salario</th>';
  echo '<th>Poblacion</th>';
  echo '</tr>';
  foreach($camioneros as $indice => $camionero)
  {
      echo '<tr>';
      foreach($camionero as $columna => $valor)
      {
          echo "<td>$valor</td>";
      }
      echo '</td>';
  }
echo '</table>';
  ?>