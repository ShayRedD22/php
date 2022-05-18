<?php
//condicionales 

/*
IF:
 if(condicion){
     instrucciones
 }else{ si no
     instrucciones
 }
*/

$color = 'rojo';

if($color == 'red'){
    echo 'El color es: '. $color;

}else{
    $color = 'red';
    echo 'El color ahora es: '. $color;
}