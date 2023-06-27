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

//                  -- PRIMER PUNTO DEL TRABAJO PRACTICO  --

 /**                      
 * Funcion destinada a la carga de juegos de array multidimensional para usarlos de ejemplos.
 *        Al no tener un parametro formal, la declaracion de parametros esta vacia
 * @return ARRAY
 */

function cargarJuegos(){

    $coleccionJuegos[0] = ["jugadorCruz"=> "Sandra" , "jugadorCirculo" => "Mario", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $coleccionJuegos[1] = ["jugadorCruz"=> "Mario" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[2] = ["jugadorCruz"=> "German" , "jugadorCirculo" => "Roberto", "puntosCruz"=> 2, "puntosCirculo" => 0];
    $coleccionJuegos[3] = ["jugadorCruz"=> "Lucas" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[4] = ["jugadorCruz"=> "Violeta" , "jugadorCirculo" => "Ana", "puntosCruz"=> 0, "puntosCirculo" => 0];
    $coleccionJuegos[5] = ["jugadorCruz"=> "Mario" , "jugadorCirculo" => "Jazmin", "puntosCruz"=> 2, "puntosCirculo" => 0];
    $coleccionJuegos[6] = ["jugadorCruz"=> "Romina" , "jugadorCirculo" => "German", "puntosCruz"=> 1, "puntosCirculo" => 1];
    $coleccionJuegos[7] = ["jugadorCruz"=> "Jennifer" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 5, "puntosCirculo" => 0];
    $coleccionJuegos[8] = ["jugadorCruz"=> "Alberto" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 0, "puntosCirculo" => 2];
    $coleccionJuegos[9] = ["jugadorCruz"=> "Roberto" , "jugadorCirculo" => "Mario", "puntosCruz"=> 0, "puntosCirculo" => 5];
                    
    return $coleccionJuegos;
}     


   //              --   SEGUNDO PUNTO DEL TRABAJO PRACTICO   --\

/** 
*  Dispone un menu del juego tateti con diferentes opciones
*       Al no tener un parametro formal, la declaracion de parametros esta vacia
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

    $opcionUserValido = solicitarNumeroEntre(1,7); // Reutilizamos la funcion del archivo tateti.php

return $opcionUserValido; // Debe retornar el numero del menu elegido.
}


//               -- TERCER PUNTO DEL TRABAJO PRACTICO --

 /**
 * function solicitarNumeroEntre($min,$max); 
 * Aca reutilizamos la funcion solicitarNumeroEntre($min,$max) del archivo tateti.php
 * Nos devuelve un numero valido segun los parametros formales que hayamos ingresado, en este caso seria 1 - 7
 */




 //               -- CUARTO PUNTO DEL TRABAJO PRACTICO -- 

/**  
 * Recibimos por usuario el numero del juego solicitado junto con el array y terminamos mostrando por pantalla datos de interes.
* @param ARRAY $listadeArrays
* @param INT $indiceJuego
* @return void
*/

function mostrarDatosJuego ($listadeArrays,$indiceJuego){ //

$resultado = "";

    if($listadeArrays[$indiceJuego]["puntosCruz"]>$listadeArrays[$indiceJuego]["puntosCirculo"]){
        $resultado = "Gano Cruz (X)";
    }elseif ($listadeArrays[$indiceJuego]["puntosCruz"]<$listadeArrays[$indiceJuego]["puntosCirculo"]) {
        $resultado = "Gano Circulo (O)";
    }else {
        $resultado = "Empate";
    }

echo "********************"."\n";
echo "Juego de tateti numero: ".($indiceJuego+1)."     ($resultado)"."\n"; // Aca sumo para devlover al usuario el numero del juego real y no mi indice .
echo "Jugador X: ".$listadeArrays[$indiceJuego]["jugadorCruz"]." obtuvo ".$listadeArrays[$indiceJuego]["puntosCruz"]." puntos"."\n";
echo "Jugador O: ".$listadeArrays[$indiceJuego]["jugadorCirculo"]." obtuvo ".$listadeArrays[$indiceJuego]["puntosCirculo"]." puntos"."\n";
echo "********************"."\n";
}

//               -- QUINTO PUNTO DEL TRABAJO PRACTICO -- 

/**  
* Recibimos como parametro dos arrays, uno que contiene la coleccion de juegos y otro con datos de un nuevo juego para RETORNAR la coleccion modificada con el nuevo juego
* @param ARRAY $coleccion
* @param ARRAY $juegoAgregar
* @return ARRAY
*/
function agregarJuego($coleccion, $juegoAgregar){

    $coleccion[] = $juegoAgregar; // Con $coleccion[] nos aseguramos que el juego se agrege en la ultima posicion

    return $coleccion;
}

//               -- SEXTO PUNTO DEL TRABAJO PRACTICO -- 

/**  
* 
* @param ARRAY $arrayColeccion 
* @param STRING $jugadorAnalisar
* @return 
*/
function primerJuegoGanadoxJugador($coleccionTotal, $jugadorGanador){


    foreach ($coleccionTotal as $indice => $juego) { // En este caso, como se trata de un array multidimensional, $indice toma la posicion del index y $juego la informacion del array asociativo.
        $jugadorX =  strtolower($juego["jugadorCruz"]); // Uso la funcion strtolower como en el programa principal para que el string devuelto se convierta todo a minuscula.
        $jugadorO =  strtolower($juego["jugadorCirculo"]); // Uso la funcion strtolower como en el programa principal para que el string devuelto se convierta todo a minuscula.
        $puntosX = $juego["puntosCruz"];
        $puntosO = $juego["puntosCirculo"];
        
        if (($jugadorX == $jugadorGanador && $puntosX > $puntosO) || ($jugadorO == $jugadorGanador && $puntosX < $puntosO)) { // Aca verificamos si en la iteracion del bucle, el nombre que dimos por parametro coincide con el del nombre iterado y si gano, siendo X u O
            return $indice; // Si gana alguna vez, retornamos el numero del juego ganado (el indice en el que se encuentra)
        }
    }
    return -1; 
}



// ----------------------------------------------------------------------------------------------------------------------------




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
echo "Elija la opcion deseada con el numero correspondiente: "."\n";
echo "\n";

$opcion = seleccionarOpciones();
$juegos = cargarJuegos();

do {
    switch ($opcion) {
        case 1: 

            //El usuario eligio la opcion de: 'Jugar al tateti'

            $nuevoJuego = jugar();  // Variable que va a guardar cada juego nuevo que el usuario 
            //$nuevoIndice = count($juegos); // Creamos una nueva variable para asignarle el numero de indice actual, lo hacemos asignandole el return de la funcion count sobre $juegos.
           // $juegos[$nuevoIndice] = $nuevoJuego; // Aca le agregamos el nuevo juego (elemento) a nuestro array.
            //imprimirResultado($nuevoJuego)."\n";
           // echo "Este es el juego numero: ".($nuevoIndice+1)."\n"; // Sumamos uno porque el juego es uno mas que el indice que nosotros tenemos internamente.

            $juegos = agregarJuego($juegos,$nuevoJuego);
            imprimirResultado($nuevoJuego)."\n";
            $numJuego = count($juegos);
            echo "Este es el juego numero: ".($numJuego)."\n"; 

            break;
        case 2: 

            //El usuario eligio la opcion de: 'Mostrar un juego'

            echo "Ingrese el numero del JUEGO que quiere ver: "."\n";
            $juegoAmostrar = solicitarNumeroEntre(1,count($juegos)); // Uso count para saber la cantidad de indices de los que dispongo en el momento del request
            mostrarDatosJuego($juegos,($juegoAmostrar-1)); // Resto 1 para acceder al indice 0 ya que el usuario no trabajo con indices, solo con el numero del juego. Mi primero juego es el indice 0 y no 1
            
            break;
        case 3: 
            
            //El usuario eligio la opcion de: 'Mostrar el primer juego ganador' 
            echo "Escriba el nombre del jugador que desea conocer su primer juego ganador: "."\n";
            
            $nombreJugador = strtolower(trim(fgets(STDIN))); // Transformo el string en minuscula para comparar en la funcion el nombre que tambien se va a convertir en minuscula y no generar discrepancia.
            $indiceGanador = primerJuegoGanadoxJugador($juegos,$nombreJugador); 

                if($indiceGanador!=-1){
                    mostrarDatosJuego($juegos,$indiceGanador)."\n";
                }else{
                    echo "El jugador: ".$nombreJugador." nunca ha ganado."."\n";
                }

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