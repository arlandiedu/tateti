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
 * Funcion destinada a la carga de juegos de array multidimensional para usarlos de ejemplos. (20 Ejemplos en total)
 *        Al no tener un parametro formal, la declaracion de parametros esta vacia
 * @return ARRAY
 */

function cargarJuegos(){

    $coleccionJuegos[0] = ["jugadorCruz"=> "Sandra" , "jugadorCirculo" => "Mario", "puntosCruz"=> 5, "puntosCirculo" => 0]; // Sandra 
    $coleccionJuegos[1] = ["jugadorCruz"=> "Mario" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 1, "puntosCirculo" => 1];  // Empate
    $coleccionJuegos[2] = ["jugadorCruz"=> "German" , "jugadorCirculo" => "Roberto", "puntosCruz"=> 2, "puntosCirculo" => 0]; // German
    $coleccionJuegos[3] = ["jugadorCruz"=> "Roberto" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 1, "puntosCirculo" => 1]; // Empate
    $coleccionJuegos[4] = ["jugadorCruz"=> "Violeta" , "jugadorCirculo" => "Ana", "puntosCruz"=> 4, "puntosCirculo" => 0]; // Violeta
    $coleccionJuegos[5] = ["jugadorCruz"=> "Mario" , "jugadorCirculo" => "Jazmin", "puntosCruz"=> 2, "puntosCirculo" => 0]; // Mario
    $coleccionJuegos[6] = ["jugadorCruz"=> "Romina" , "jugadorCirculo" => "German", "puntosCruz"=> 1, "puntosCirculo" => 1]; // Empate
    $coleccionJuegos[7] = ["jugadorCruz"=> "Jenifer" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 2, "puntosCirculo" => 0]; // Jenifer
    $coleccionJuegos[8] = ["jugadorCruz"=> "Alberto" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 0, "puntosCirculo" => 2]; // Sandra
    $coleccionJuegos[9] = ["jugadorCruz"=> "Roberto" , "jugadorCirculo" => "Mario", "puntosCruz"=> 0, "puntosCirculo" => 5]; // Mario
    $coleccionJuegos[10] = ["jugadorCruz"=> "Sandra" , "jugadorCirculo" => "Jenifer", "puntosCruz"=> 6, "puntosCirculo" => 0]; // Sandra
    $coleccionJuegos[11] = ["jugadorCruz"=> "Lucas" , "jugadorCirculo" => "Mario", "puntosCruz"=> 0, "puntosCirculo" => 2]; // Mario
    $coleccionJuegos[12] = ["jugadorCruz"=> "Roberto" , "jugadorCirculo" => "German", "puntosCruz"=> 0, "puntosCirculo" => 3]; // German
    $coleccionJuegos[13] = ["jugadorCruz"=> "Lucas" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 0, "puntosCirculo" => 6]; // Alberto
    $coleccionJuegos[14] = ["jugadorCruz"=> "Roberto" , "jugadorCirculo" => "German", "puntosCruz"=> 3, "puntosCirculo" => 0]; // Roberto
    $coleccionJuegos[15] = ["jugadorCruz"=> "Sandra" , "jugadorCirculo" => "Mario", "puntosCruz"=> 0, "puntosCirculo" => 5]; // Mario
    $coleccionJuegos[16] = ["jugadorCruz"=> "Ana" , "jugadorCirculo" => "Romina", "puntosCruz"=> 6, "puntosCirculo" => 0]; // Ana
    $coleccionJuegos[17] = ["jugadorCruz"=> "Mario" , "jugadorCirculo" => "Romina", "puntosCruz"=> 0, "puntosCirculo" => 5]; // Romina
    $coleccionJuegos[18] = ["jugadorCruz"=> "Lucas" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 0, "puntosCirculo" => 3]; // Sandra
    $coleccionJuegos[19] = ["jugadorCruz"=> "Jenifer" , "jugadorCirculo" => "Violeta", "puntosCruz"=> 1, "puntosCirculo" => 1]; // Empate

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
* Funcion que dada una coleccion de juegos y un nombre nos dara si el jugador gano o no gano ninguna partida.
* @param ARRAY $arrayColeccion 
* @param STRING $jugadorAnalisar
* @return INT
*/

    function primerJuegoGanadoxJugador($coleccionTotal, $jugadorGanador) {

        $indice = 0; // Inicializamos el indice ya que usamos while
        $totalJuegos = count($coleccionTotal); // Contamos los cant. de juegos del array
        
        while ($indice < $totalJuegos) {  // Aca usamos while porque solo necesitamos el primer juego que gano, no hace falta que lo recorra todo (Aunque puede terminar haciendolo si gana en el ultimo indice)

            $juego = $coleccionTotal[$indice]; // Obtenemos el juego actual
            $jugadorX = strtolower($juego["jugadorCruz"]); 
            $jugadorO = strtolower($juego["jugadorCirculo"]); 
            $puntosX = $juego["puntosCruz"];
            $puntosO = $juego["puntosCirculo"];
            
            if (($jugadorX == $jugadorGanador && $puntosX > $puntosO) || ($jugadorO == $jugadorGanador && $puntosX < $puntosO)) {
                return $indice; // En este if, al ganar retornamos el indice en el que lo hizo
            }
            
            $indice++; // Incrementamos el indice (iteradora) para que cicle en un nuevo indice.
        }
        
        return -1; // Si nunca gano, retornamos -1
    }

//               -- SEPTIMO PUNTO DEL TRABAJO PRACTICO -- 

/** Con los parametros obtenidos, la funcion desgloza el array del jugador requerido y brinda informacion del mismo
 * (Juegos ganados, juegos perdidos, juegos empatados y puntos acumulados en total)
* @param ARRAY $coleccionTotal
* @param STRING $nombreJugador
* @return ARRAY
*/

// Funcion que dada una coleccion de juegos y un nombre nos dara un resumen del jugador.

function resumenJugador($coleccionTotal, $nombreJugador) {
    
    $resumen =[                             // Declaramos un nuevo array para completar la informacion individual del jugador requerido por parametro.
        'nombre' => $nombreJugador,
        'juegosGanados' => 0, // Inicializamos las variables contadoras
        'juegosPerdidos' => 0, // Contadora
        'juegosEmpatados' => 0, // Contadora
        'puntosAcumulados' => 0 // Acumulable
        ];

    foreach ($coleccionTotal as $juego) {
        
        $jugadorX = strtolower($juego['jugadorCruz']);       
        $jugadorO = strtolower($juego['jugadorCirculo']);    
        $puntosX = $juego['puntosCruz'];                     
        $puntosO = $juego['puntosCirculo'];                 

        if ($jugadorX == strtolower($nombreJugador)) { // Con esta condicion, en cada recorrido comparamos el nombre ingresado por parametro con el iterado, recopilando informacion 
            if ($puntosX > $puntosO) {
                $resumen['juegosGanados']++;           // Si gano un juego
            } elseif ($puntosX < $puntosO) {
                $resumen['juegosPerdidos']++;          // Si perdio un juego
            } else {
                $resumen['juegosEmpatados']++;         // Si lo empato
            }
            $resumen['puntosAcumulados'] = $resumen['puntosAcumulados'] + $puntosX;   // En caso de ganar, sumamos los puntos otorgados
        }

        elseif ($jugadorO == strtolower($nombreJugador)) { // Mismo caso que arriba pero analizando si el jugador le toco ser O
            if ($puntosO > $puntosX) {
                $resumen['juegosGanados'] = $resumen['juegosGanados'] + 1; // Para evitar tanto codigo, resumi con "++".
            } elseif ($puntosO < $puntosX) {
                $resumen['juegosPerdidos']++;
            } else {
                $resumen['juegosEmpatados']++;
            }
            $resumen['puntosAcumulados'] += $puntosO; // Para evitar tanto codigo, resumi con "+=".
        }
    }

    return $resumen;
}

//               -- OCTAVO PUNTO DEL TRABAJO PRACTICO -- 
 /**
  * Solicita al usuario que ingrese X o O y RETORNA el simbolo elegido, en caso de no ser ninguno de los dos simbolos, pide nuevamente.
  * @return STRING
  */

  // Funcion para dado un simbolo, se determine si es X ó O.
  function eleccionSimboloXO(){
    // STRING $simboloElegido

      echo "Ingrese el simbolo elegido: Cruz (X) o Circulo (O): \n";
      $simboloElegido = strtoupper(trim(fgets(STDIN))); // Lo hago mayuscula para que la condicion siguiente no tenga problemas por minusculas.
      
      while(!($simboloElegido == "X" or $simboloElegido == "O")){ // Cualquier letra que no sea ni X ni O sera rechazada, numeros, caracteres invalidos, etc.
          echo "Simbolo incorrecto, solo pueden ser Cruz (X) o Circulo (O): \n";
          $simboloElegido = strtoupper(trim(fgets(STDIN)));
      }

      return $simboloElegido;
  }

//               -- NOVENO PUNTO DEL TRABAJO PRACTICO -- 
/**
 * Retorna la cantidad de juegos ganados en total de toda la coleccion, si es empate no cuenta.
 * @param array $coleccionJuegos
 * @return INT
 */

 // Funcion que indica la cantidad de juegos ganados dada una coleccion de juegos. Sin importar que sea X ó O.
function juegosGanadosTotal($coleccionJuegos){
    // INT $juegosGanados, $puntosX, $puntosO

    $juegosGanados = 0;
    
    foreach ($coleccionJuegos as $juego) {

        if ($juego['puntosCruz'] != $juego['puntosCirculo']) { // Si son diferentes es porque alguno gano.
            $juegosGanados++;
        }
    }
    
    return $juegosGanados;
}

//            -- DECIMO PUNTO DEL TRABAJO PRACTICO -- 

/**
 * 
 * @param array $coleccionJuegos
 * @param string $simbolo
 * @return INT
 */

 //Dada una colección de juegos y un símbolo (X ó O) retorne la cantidad de juegos ganados por el símbolo.

function juegosGanadosPorSimbolo($coleccionJuegos, $simbolo)
{
    $juegosGanados = 0;

    foreach ($coleccionJuegos as $juego) {
        $puntosX = $juego['puntosCruz'];     
        $puntosO = $juego['puntosCirculo'];

        if ($simbolo == 'X' && $puntosX > $puntosO){ // Si el simbolo que viene por parametro es X y GANA, sumamos ganados
            $juegosGanados++;
        }elseif($simbolo == 'O' && $puntosO > $puntosX){ // Si el simbolo que viene por parametro es O y GANA, sumamos ganados
            $juegosGanados++;
        }
    }
    
    return $juegosGanados; // Independientemente del simbolo, ya que lo verificamos con la condicion arriba, retornamos la cantidad de juegos ganados por el simbolo que viene por parametro
}

//            -- ONCEAVO PUNTO DEL TRABAJO PRACTICO -- 
    
/**
 * Dada una colección de juegos, muestre la colección de juegos ordenado por el nombre del jugador cuyo símbolo es O.
 * @param  $juegoUno
 * @param  $juegoDos
 * @return INT
 */

function ordenadoAlfabeticamente($juegoUno,$juegoDos){
    
    
    $ordenado = 0;

    if($juegoUno["jugadorCirculo"]>$juegoDos["jugadorCirculo"]){      //Ordena por jugador O (si, jugadorUno mayor a JugadorDos)
        $ordenado = 1;
    }elseif($juegoUno["jugadorCirculo"]<$juegoDos["jugadorCirculo"]){  //Ordena por jugador O (si, jugadorUno menor a JugadorDos)
        $ordenado = -1;
    }else{
        $ordenado = 0;
    }

    return $ordenado;
}

function ordenarNombreO ($arrayAordenar){

   uasort($arrayAordenar,"ordenadoAlfabeticamente");
   print_r($arrayAordenar);
}


//            -- DOCEAVO PUNTO DEL TRABAJO PRACTICO -- 


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:



echo "Juego del TaTeTi"."\n";
echo "Elija la opcion deseada con el numero correspondiente: "."\n";
echo "\n";

$juegos = cargarJuegos(); // Cargamos la coleccion de juegos de ejemplo.

do {
    $opcion = seleccionarOpciones();

    // Switch es una estructura de control que permite ejecutar diferentes lineas de codigo segun el valor de la expresion.

    switch ($opcion) {
        case 1: 

            //El usuario eligio la opcion de: 'Jugar al tateti'

            $nuevoJuego = jugar();  // Variable que va a guardar cada juego nuevo que el usuario 
            $juegos = agregarJuego($juegos,$nuevoJuego); // Utilizamos funcion para anadir informacion nueva a nuestro array de coleccion.
            imprimirResultado($nuevoJuego)."\n"; // Mostramos resultado del match
            $numJuego = count($juegos); 
            echo "Este es el juego numero: ".($numJuego)."\n"; // Mostramos informacion extra, en este caso que numero de juego es
            break; //se utiliza para salir del switch después de cada caso.

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
            //El usuario eligio la opcion de: 'Mostrar el porcentaje de juegos ganados por X o por 0
            echo "Eliga el simbolo que desea saber el porcentaje de juegos ganados: ";
        
            $simboloGanador = eleccionSimboloXO(); 
            $juegosGanadosXsimbolo = juegosGanadosPorSimbolo($juegos, $simboloGanador);
            $juegosGanadosTotal = juegosGanadosTotal($juegos);
            $porcentajeSimbolo = $juegosGanadosXsimbolo * 100 / $juegosGanadosTotal;
            echo "El simbolo: ".$simboloGanador." gano el: ".$porcentajeSimbolo."%, de los juegos"."\n";
            break;  
            
        case 5: 
                //El usuario eligio la opcion de: 'Mostrar resumen de jugador' 

            echo "Ingresa el nombre del jugador del cual desea un resumen: "."\n";
            $nombreResumen = strtolower(trim(fgets(STDIN))); 
            $arrayResumen = resumenJugador($juegos, $nombreResumen); // Creamos un array asociativo para recibir toda la info que nos retorna la funcion.

            echo "*************************************"."\n";
            echo "Jugador: " .$arrayResumen["nombre"]."\n";
            echo "Gano: " . $arrayResumen["juegosGanados"] . " juegos"."\n";
            echo "Perdio: " . $arrayResumen["juegosPerdidos"] . " juegos"."\n";
            echo "Empato: " . $arrayResumen["juegosEmpatados"] . " juegos"."\n";
            echo "Total de puntos acumulados: " . $arrayResumen["puntosAcumulados"] . " puntos"."\n";
            echo "*************************************"."\n";
            break; 

        case 6: 
                //El usuario eligio la opcion de: 'Mostrar listado de juegos ordenados por jugador O'
        
            ordenarNombreO($juegos);
            break; 
    }

} while ($opcion != 7);

// repetira mientras la opcion elegida sea distinta a "7".


