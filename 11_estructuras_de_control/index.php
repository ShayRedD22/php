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
echo '--------------------------------------------------------------';
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
echo '--------------------------------------------------------------';
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

echo '<br>';
echo '--------------------------------------------------------------';
//Ejemplo 4 

/*
//operadores logicos
&& => sigifiva and (y)
|| OR (o)
! NOT (NO)
*/
$edad1 = 18;
$edad2 = 64;
$edad_oficial= 17;

echo'<br>';

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo 'Cumple usted con el rango de edad para trabajar';
}else{
    echo 'Usted no cumlple con el rango de edad para trabajar';
}

//switch
echo '<br>';
echo '--------------------------------------------------------------';
echo '<br>';
echo 'Dia de la semana usando switch';
echo '<br>';

$diaN = 4;

switch ($diaN){
    case 1:
        echo 'Lunes';
        break;
    case 2:
        echo 'Martes';
        break; 
    case 3:
        echo 'Miercoles';
        break;
    case 4:
        echo 'Jueves';
        break;
    case 5:
        echo 'Viernes';
        break;
    case 6:
       echo 'Sabado';
       break;
    case 7:
        echo 'Domingo';
        break;
    default:
        echo 'no es un dia de la semana';
}  

echo '<br>';
echo '--------------------------------------------------------------';
echo '<br>';
//GOTO

/*
    el goto sirve para saltarce instrucciones
*/
goto marca;

echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
    echo 'Me salte 4 echo';