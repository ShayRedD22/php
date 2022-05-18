<?php

$dia = $_POST['dia'];

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
}else{
    echo 'No es un Dia de la semana ';
}

echo '<br>';
echo "<a href='index.php'>REGRESAR</a>";