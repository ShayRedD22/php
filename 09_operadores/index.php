<?php
//operadores 

$numero1 = 33;
$numero2 = 44;

echo 'Operaciones';
echo '<br>';
//suma
echo 'suma: '. ($numero1 + $numero2);
echo '<br>';
//resta
echo 'resta: '. ($numero1 + $numero1);
echo '<br>';
//multiplicacion
echo 'multiplicacion: '. ($numero1 * $numero2 );
echo '<br>';
//division
echo 'division: '. ($numero1 / $numero2);
echo '<br>';
//resto de una divisionn
echo 'Resto de una division: '. ($numero1 % $numero2). '<br>'.'<br>';

//operadores de incremento y decremento
echo 'Operaciones de Incremento y Decremento';
$año = 2019;

//operador de incremento
//aumenta en uno el valor de la variable
$año++;

//operador decremento
//resta en uno el valor de la variable
$año--;

echo "<h1>$año</h1>". '<br>'.'<br>';

//operadores de asignacion

$edd = 55;

echo $edd.'<br>';

echo ($edd+= 55);