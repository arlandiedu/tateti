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


    $opcionUserValido = solicitarNumeroEntre(1,7); // Preguntar a los profes si es valida funcion dentro de funcion..

return $opcionUserValido; // Debe retornar el numero del menu elegido.
}

/** 
 * -- TERCER PUNTO DEL TRABAJO PRACTICO --
 * 
 * Aca reutilizamos la funcion solicitarNumeroEntre($min,$max) del archivo tateti.php
 * Nos devuelve un numero valido segun los parametros formales que hayamos ingresado, en este caso seria 1 - 7
 */



/**  
 * -- CUARTO PUNTO DEL TRABAJO PRACTICO -- 
 * Usando un array con informacion guardada, disponemos a mostrarlo en detalle con esta funcion
* @param ARRAY $arrayJuego
* @param INT $numeroJuegoSolicitado
* @return void
*/

function mostrarDatosJuego ($arrayJuego,$numeroJuegoSolicitado){ //

$resultado = "";

    if($arrayJuego[$numeroJuegoSolicitado]["puntosCruz"]>$arrayJuego[$numeroJuegoSolicitado]["puntosCirculo"]){
        $resultado = "Gano Cruz (X)";
    }elseif ($arrayJuego[$numeroJuegoSolicitado]["puntosCruz"]<$arrayJuego[$numeroJuegoSolicitado]["puntosCirculo"]) {
        $resultado = "Gano Circulo (O)";
    }elseif ($arrayJuego[$numeroJuegoSolicitado]["puntosCruz"]==$arrayJuego[$numeroJuegoSolicitado]["puntosCirculo"]) {
        $resultado = "Empate";
    }

echo "********************"."\n";
echo "Juego de tateti numero: ".($numeroJuegoSolicitado+1)."     ($resultado)"."\n"; // Aca sumo para devlover al usuario el numero del juego real y no mi indice .
echo "Jugador X: ".$arrayJuego[$numeroJuegoSolicitado]["jugadorCruz"]." obtuvo ".$arrayJuego[$numeroJuegoSolicitado]["puntosCruz"]." puntos"."\n";
echo "Jugador O: ".$arrayJuego[$numeroJuegoSolicitado]["jugadorCirculo"]." obtuvo ".$arrayJuego[$numeroJuegoSolicitado]["puntosCirculo"]." puntos"."\n";
echo "********************"."\n";
}



// ----------------------------------------------------------------------------------------------------------------------------







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
$juegos = cargarJuegos();

do {
    switch ($opcion) {
        case 1: 
            //El usuario eligio la opcion de: 'Jugar al tateti'
            $nuevoJuego = jugar();  //array asociativo
            $nuevoIndice = count($juegos); // Aca contamos la cantidad de indices que hay para reutilizarlo.
            $juegos[$nuevoIndice] = $nuevoJuego; // Aca le agregamos el nuevo elemento a nuestro array.
            //array_push($juegos, $nuevoJuego); // OTRA FORMA
            break;

        case 2: 
            //El usuario eligio la opcion de: 'Mostrar un juego'
            echo "Ingrese el numero del JUEGO que quiere ver";
            $juegoAmostrar = solicitarNumeroEntre (1,count($juegos)); // Uso count para saber la cantidad de indices de los que dispongo en el momento del request
            mostrarDatosJuego($juegos,($juegoAmostrar-1)); // Resto 1 para acceder al indice 0 ya que el usuario no trabajo con indices, solo con el numero del juego. Mi primero juego es el indice 0 y no 1
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