<h3>provincias</h3>
<a href="/">Regresar</a>
<br/><br>

<input type="submit" value="insertar">

<?php
  include 'provincia/provincias.php';
  $provincias = listar_provincias(); 
  echo '<table border="1"';
  echo '<tr>';
  echo '<th>codigo</th>';
  echo '<th>nombre</th>';
  echo '</tr>';
  foreach($provincias as $indice => $provincia)
  {
      echo '<tr>';
      foreach($provincia as $columna => $valor)
      {
          echo "<td>$valor</td>";
      }
      echo '</td>';
  }
echo '</table>';
  ?>