<?php
include_once("tateti.php");

                    /**************************************/
                    /***** DATOS DE LOS INTEGRANTES *******/
                    /**************************************/

/* Eduardo Leandro Arlandi - FAI 4376 - arlandieduardo@gmail.com - GITHUB: arlandiedu */
/* Nicolas Alejandro Puhl - FAI-4417 - nicopuhloch525@gmail.com - GITHUB: nicooch525 */


                    /**************************************/
                    /***** DEFINICION DE FUNCIONES ********/
                    /**************************************/

/** Determina si $num esta entre el rango de 1 y 7, en caso de ser valido devuelve el numero ingresado.
 * Si el numero no es valido, sigue pidiendo un numero hasta que el ingresado este dentro de los parametros esperados (1-7) 
 * @param $opcionUser
 * @return INT
*/
function numeroValido($num){

    while($num<1 || $num>7){
        echo "El numero ingresado es incorrecto, ingrese nuevamente la opcion deseada: ";
        $num = trim(fgets(STDIN));
}
return $num;
}


/** Dispone un menu del juego tateti con diferentes opciones
* Al no tener un parametro formal, la declaracion de parametros esta vacia
* @return INT
*/
function seleccionarOpciones (){

    echo "1) Jugar al tateti"."\n";
    echo "2) Mostrar un juego"."\n";
    echo "3) Mostrar el primer juego ganador"."\n";
    echo "4) Mostrar el porcentaje de juegos ganados"."\n";
    echo "5) Mostrar resumen de jugador"."\n";
    echo "6) Mostrar listado de juegos ordenados por jugador O"."\n";
    echo "7) Salir!"."\n";

    echo "Elija el numero de la opcion deseada (1 - 7)"."\n";
    $opcionUserFuncion = trim(fgets(STDIN));
    $OpcionUserValido = numeroValido($opcionUserFuncion); // Preguntar a los profes si es valida funcion dentro de funcion..

return $OpcionUserValido; // Debe retornar el numero del menu elegido.
}




/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

//$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);

echo "Juego del TaTeTi"."\n";
echo "\n";

$opcionUser = seleccionarOpciones();


do {
    $opcion = $opcionUser;

    
    switch ($opcion) {
        case 1: 
            //El usuario eligio la opcion de: 'Jugar al tateti'
            $juego = jugar();
            break;
        case 2: 
            //El usuario eligio la opcion de: 'Mostrar un juego'
            echo "prueba mostrando un juego";
            break;
        case 3: 
            //El usuario eligio la opcion de: 'Mostrar el primer juego ganador' 

            break;
        case 4: 
            //El usuario eligio la opcion de: 'Mostrar el porcentaje de juegos ganados' 

            break;   
        case 5: 
                //El usuario eligio la opcion de: 'Mostrar resumen de jugador' 
    
            break;
        case 6: 
                //El usuario eligio la opcion de: 'Mostrar listado de juegos ordenados por jugador O'
        
            break;
        
    }
} while ($opcion != 7);
