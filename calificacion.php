<?php
// una practica calcule el promedio de 5 notas ó calificaciones verificando que los valores sean numericos y posteriormente indicar si esta aprobado
// o reprobado segun el valor asignado por el promedio
$Calificacion1 = 10;
$Calificacion2 = 7;
$Calificacion3 = 9;
$Calificacion4 = 8;
$Calificacion5 = 10;
$minimo = 7;

if(is_numeric($Calificacion1) && is_numeric($Calificacion2) && is_numeric($Calificacion3) && is_numeric($Calificacion4) && is_numeric($Calificacion5)){
    $promedio = ($Calificacion1+$Calificacion2+$Calificacion3+$Calificacion4+$Calificacion5)/5;
    if ($promedio >= $minimo){
        echo "<br><br> Tu promedio es de: ".$promedio." por lo tanto estas aprobado";
    }
    else{
        echo "<br><br> Tu promedio es de: ".$promedio." por lo tanto estas no aprobado";
    }
}
else{
    $mensaje = "Alguno de los valores contenidos en las calificaciones no corresponde a un valor numerico";
    echo $mensaje;
}
?>