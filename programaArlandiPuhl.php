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

/**
 * -- PRIMER PUNTO DEL TRABAJO PRACTICO  --
 * Funcion destinada a la carga de juegos de array multidimensional para usarlos de ejemplos.
 * Al no tener un parametro formal, la declaracion de parametros esta vacia
 * @return ARRAY
 */

function cargarJuegos(){

    $coleccionJuegos[0] = ["jugadorCruz"=> "Sandra" , "jugadorCirculo" => "Mario", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz"=> "Mario" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 1, "puntosCirculo”" => 1];
    $coleccionJuegos[2] = ["jugadorCruz"=> "German" , "jugadorCirculo" => "Roberto", "puntosCruz"=> 2, "puntosCirculo" => 0];
    $coleccionJuegos[3] = ["jugadorCruz"=> "Lucas" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[4] = ["jugadorCruz"=> "Violeta" , "jugadorCirculo" => "Ana", "puntosCruz"=> 0, "puntosCirculo" => 0];
    $coleccionJuegos[5] = ["jugadorCruz"=> "Lucia" , "jugadorCirculo" => "Jazmin", "puntosCruz"=> 2, "puntosCirculo" => 0];
    $coleccionJuegos[6] = ["jugadorCruz"=> "Romina" , "jugadorCirculo" => "German", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[7] = ["jugadorCruz"=> "Jennifer" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $coleccionJuegos[8] = ["jugadorCruz"=> "Alberto" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 0, "puntosCirculo" => 2];
    $coleccionJuegos[9] = ["jugadorCruz"=> "Roberto" , "jugadorCirculo" => "Mario", "puntosCruz"=> 0, "puntosCirculo" => 5];
                    
    return $coleccionJuegos;
}     

/**
 * --   SEGUNDO PUNTO DEL TRABAJO PRACTICO   --
 *  Dispone un menu del juego tateti con diferentes opciones
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

    $opcionUserFuncion = trim(fgets(STDIN));
    $OpcionUserValido = numeroValido($opcionUserFuncion); // Preguntar a los profes si es valida funcion dentro de funcion..

return $OpcionUserValido; // Debe retornar el numero del menu elegido.
}

/** 
 * -- TERCER PUNTO DEL TRABAJO PRACTICO --
 * Determina si $num esta entre el rango de 1 y 7, en caso de ser valido devuelve el numero ingresado.
 * Si el numero no es valido, sigue pidiendo un numero hasta que el ingresado este dentro de los parametros esperados (1-7) 
 * @param $num
 * @return INT
*/

function numeroValido($num){

    while($num<1 || $num>7){
        echo "El numero ingresado es incorrecto, ingrese nuevamente la opcion deseada: ";
        $num = trim(fgets(STDIN));
}
return $num;
}

/**  
 * -- CUARTO PUNTO DEL TRABAJO PRACTICO -- 
 * Usando un array con informacion guardada, disponemos a mostrarlo en detalle con esta funcion
* @param ARRAY $arrayJuego
* @return
*/

function mostrarDatosJuego ($arrayJuego){ // probando

echo "********************"."\n";
echo "Juego de tateti numero: "."\n";//no se como contar los juegos todavia
echo "Jugador X: ".$arrayJuego["jugadorCruz"]."obtuvo".$arrayJuego["puntosCruz"]."puntos"."\n"; // hay que arreglar que se muestran pegados
echo "Jugador O: ".$arrayJuego["jugadorCirculo"]."obtuvo".$arrayJuego["puntosCirculo"]."puntos"."\n";
echo "********************"."\n";
}




// 7)

/**
 * @param int $coleccionJuegos
 * @param string $nombreJugador
 * @param return $jugador
 */
function resumenJugador ($coleccionJuegos , $nombreJugador){

    $jugador = array (
        "nombre" => $nombreJugador,
        "juegosGanados" => $juegosGanados,
        "juegosPerdidos" => $juegosPerdidos,
        "juegosEmpatados" => $juegosEmpatados,
        "puntosAcumulados" => $puntosAcumulados);

return $jugador;

}

// 8)

/**
 * @param 
 * @param return $simbolo
 */
 
function solicitarSimbolo () {
    while (true) {
        echo "ingrese un simbolo (X / O): ";
        $simbolo = trim(fgets(STDIN));
        if ((strtoupper($simbolo) === "X" || strtoupper($simbolo) === "X")){
            return strtoupper($simbolo);
        } else {
            echo "Simbolo invalido. Por favor ingrese X ó O \n";
        }
    }
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
echo "Elija con el numero correspondiente de su teclado, la opcion que desea: "."\n";
echo "\n";

$opcion = seleccionarOpciones();
$juego = cargarJuegos();

do {
    switch ($opcion) {
        case 1: 
            //El usuario eligio la opcion de: 'Jugar al tateti'
            $juego = jugar(); // $juego es un arreglo asociativo, en la funcion tateti nos devuelve la informacion de jugador y puntos
            print_r($juego);
            imprimirResultado($juego);
            break;

        case 2: 
            //El usuario eligio la opcion de: 'Mostrar un juego'
            $mostrarJuego = mostrarDatosJuego($juego);
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
    $opcion = seleccionarOpciones();

} while ($opcion != 7);