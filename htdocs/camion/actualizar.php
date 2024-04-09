<?php

function actualizar_camion($matricula, $modelo, $tipo, $potencia)
{
    include  './conexion.php';
    $consulta = "UPDATE `camiones` SET `modelo` = '$modelo' WHERE `camiones`.`matricula` = $matricula;";
    $resultado = mysqli_query($conexion, $consulta);
    return $resultado;
}
