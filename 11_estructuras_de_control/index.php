<?php
//condicionales 

/*
IF:
 if(condicion){
     instrucciones
 }else{ si no
     instrucciones
 }

//OPERADORES DE COMPARACION
== IGUAL
=== IDENTICO
!= DISTINTO
<> DIFERENTE
!== NO IDENTICO
< MENOR QUE
> MAYOR QUE 
<= MENOR O IGUAL QUE 
>= MAYOR O IGUAL QUE

*/

//Ejemplo 1
$color = 'rojo';

if($color == 'red'){
    echo 'El color es: '. $color;

}else{
    $color = 'red';
    echo 'El color ahora es: '. $color;
}

echo '<br>';

//Ejemplo 2
$edad = 32;
$mayor_edad = 18;

if ($edad >= $mayor_edad){
    echo 'Es mayor de edad';

}else{
    echo 'Es menor de edad';
}

echo '<br>';

//Ejemplo 3 elseif
$dia = 7;

if($dia == 1){
    echo 'Es Lunes';

}elseif($dia == 2){
    echo 'Es Martes';

}elseif($dia == 3){
    echo 'Es Miercoles';

}elseif($dia == 4){
    echo 'Es jueves';

}elseif($dia == 5){
    echo 'Es Viernes';

}elseif($dia == 6){
    echo 'Es Sabado';

}elseif($dia == 7){
    echo 'Es Domingo';
}

//Ejemplo 4 
//operadores logicos





