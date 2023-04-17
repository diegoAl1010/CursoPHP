<?php
$Valor1= 99;
$Valor2 = 56;
$Valor3 = 170;
$Persona = "Mujer";

// sentencia if operadores relacionales o operadores logicos
/* if(Condicion) {
codigo o accion a relaizar en el navegador si se cumple la condicion
}
else{
si la accion es contraraia al if dentro de las llaves la accion a ejecutarse
}
*/
// este if ocupara operadores relacionales 
/*if ($Valor1 >= $Valor2){
echo "Verdadero";
}
else{
││echo "falso";
}
*/
/*
comparando el vaor de la variable con un string
if($Persona == 'Hombre'){
}
echo "Como el genero de la variable persona es Hombre se llamara Luis <br>"
else{

│││echo "Como no se cumple el if entonces el genero no es hombre por lo tanto no puedo darle nombre";
}
*/

if($Valor1> $Valor2 && $Valor1> $Valor3){
    echo "El valor de: ".$Valor1." es mayor a ".$Valor3." y mayor a ". $Valor3;
    }
    else if($Valor2> $Valor1 and $Valor2> $Valor3){
    echo "El valor de: ".$Valor2." es mayor a ".$Valor1." y mayor a ".$Valor3;
    }
    else if($Valor3 > $Valor1 and $Valor3 > $Valor2){
    echo "El valor de: ".$Valor3." es mayor a ".$Valor1." y mayor a ".$Valor2;
    }
    else{
    echo "no se cumple ninguna de las comdiciones";
    }
    ?>