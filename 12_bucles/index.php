<?php
//ESTRUCTURAS DE CONTROL- ITERADORES Y BUCLES

//es una estructura de control que itera o repite la ejecucion de una serie de instrucciones muchas veces o tantas veces como sea necesario 
//en base a una condicion que le buble lleva 

//Bucle while 

/*
    while (condiciones){
        bloque de instrucciones
    
    }

*/

//Ejemplo 1 Bucle While 

$num = 0;
while($num <= 100){

    echo "<>$num";
    
    if($num != 100){

        echo ', ';

    }else{

        echo '. ';

    }
    
    $num++;

}

//Ejemplo 2 
echo "<hr/>";

//isset sirve para comprovar si esxite una varibale o como en este caso un array 
if(isset($_GET['num'])){
    $num = (int)$_GET['num'];//con el int casteamos el dato **casteo de datos** castear una vatiable significa cambiar el tipo 

}else{
    $num = 1;
}

var_dump($num);

echo "<h1>Tabla de multiplicar del numero $num </h1>";

$contador = 0;

while($contador <= 10){

   echo "$num * $contador = ". ($num * $contador);

    if($contador != 10){
        echo "<br>";
   }
   
   $contador++;

}

echo("<hr>");
/*
//do while
    do{
    //bloque de instrucciones

    }while{condiciones};

*/
//Ejemplo con do while 
$edad = 18;

$conta = 1;


do{
    echo "Tienes acceso por ser mayor de 18 $conta <br>";
    $conta++; 
    
}while($edad >= 18 && $conta <= 10);



