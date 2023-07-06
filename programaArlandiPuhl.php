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
 /* ARRAY $coleccionJuegos */

   /*      $coleccionJuegos[0] = ['jugadorCruz'=> 'Ana' , 'jugadorCirculo' => 'Bruno', 'puntosCruz'=> 5, 'puntosCirculo' => 0];               // Ana 
         $coleccionJuegos[1] = ['jugadorCruz'=> 'Carla' , 'jugadorCirculo' => 'Damian', 'puntosCruz'=> 1, 'puntosCirculo' => 1];            // Empate
         $coleccionJuegos[2] = ['jugadorCruz'=> 'Edgardo' , 'jugadorCirculo' => 'Fabiana', 'puntosCruz'=> 2, 'puntosCirculo' => 0];         // Edgardo
         $coleccionJuegos[3] = ['jugadorCruz'=> 'Graciela' , 'jugadorCirculo' => 'Horacio', 'puntosCruz'=> 1, 'puntosCirculo' => 1];        // Empate
         $coleccionJuegos[4] = ['jugadorCruz'=> 'Ivan' , 'jugadorCirculo' => 'Julieta', 'puntosCruz'=> 4, 'puntosCirculo' => 0];            // Ivan
         $coleccionJuegos[5] = ['jugadorCruz'=> 'Julieta' , 'jugadorCirculo' => 'Ana', 'puntosCruz'=> 2, 'puntosCirculo' => 0];             // Julieta
         $coleccionJuegos[6] = ['jugadorCruz'=> 'Ana' , 'jugadorCirculo' => 'Edgardo', 'puntosCruz'=> 1, 'puntosCirculo' => 1];             // Empate
         $coleccionJuegos[7] = ['jugadorCruz'=> 'Graciela' , 'jugadorCirculo' => 'Ivan', 'puntosCruz'=> 0, 'puntosCirculo' => 2];           // Ivan
         $coleccionJuegos[8] = ['jugadorCruz'=> 'Carla' , 'jugadorCirculo' => 'Bruno', 'puntosCruz'=> 0, 'puntosCirculo' => 2];             // Bruno
         $coleccionJuegos[9] = ['jugadorCruz'=> 'Horacio' , 'jugadorCirculo' => 'Graciela', 'puntosCruz'=> 0, 'puntosCirculo' => 5];        // Graciela
         $coleccionJuegos[10] = ['jugadorCruz'=> 'Bruno' , 'jugadorCirculo' => 'Fabiana', 'puntosCruz'=> 6, 'puntosCirculo' => 0];          // Bruno
         $coleccionJuegos[11] = ['jugadorCruz'=> 'Julieta' , 'jugadorCirculo' => 'Carla', 'puntosCruz'=> 0, 'puntosCirculo' => 2];          // Carla
         $coleccionJuegos[12] = ['jugadorCruz'=> 'Ana' , 'jugadorCirculo' => 'Carla', 'puntosCruz'=> 0, 'puntosCirculo' => 3];              // Carla
         $coleccionJuegos[13] = ['jugadorCruz'=> 'Carla' , 'jugadorCirculo' => 'Edgardo', 'puntosCruz'=> 0, 'puntosCirculo' => 6];          // Edgardo
         $coleccionJuegos[14] = ['jugadorCruz'=> 'Graciela' , 'jugadorCirculo' => 'Ivan', 'puntosCruz'=> 3, 'puntosCirculo' => 0];          // Graciela
         $coleccionJuegos[15] = ['jugadorCruz'=> 'Ivan' , 'jugadorCirculo' => 'Horacio', 'puntosCruz'=> 0, 'puntosCirculo' => 5];           // Horacio
         $coleccionJuegos[16] = ['jugadorCruz'=> 'Horacio' , 'jugadorCirculo' => 'Ivan', 'puntosCruz'=> 0, 'puntosCirculo' => 6];           // Ivan
         $coleccionJuegos[17] = ['jugadorCruz'=> 'Ana' , 'jugadorCirculo' => 'Ivan', 'puntosCruz'=> 0, 'puntosCirculo' => 5];               // Ivan
         $coleccionJuegos[18] = ['jugadorCruz'=> 'Horacio' , 'jugadorCirculo' => 'Ana', 'puntosCruz'=> 0, 'puntosCirculo' => 3];            // Ana
         $coleccionJuegos[19] = ['jugadorCruz'=> 'Bruno' , 'jugadorCirculo' => 'Julieta', 'puntosCruz'=> 1, 'puntosCirculo' => 1];          // Empate
 */
        $coleccionJuegos = [];

    $jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
    $jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
    $jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
    $jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
    $jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
    $jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
    $jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
    $jg10 = ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];

 array_push($coleccionJuegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);

    return $coleccionJuegos;
 }


   //              --   SEGUNDO PUNTO DEL TRABAJO PRACTICO   --\

/** 
*  Dispone un menu del juego tateti con diferentes opciones
*       Al no tener un parametro formal, la declaracion de parametros esta vacia
* @return INT
*/

function seleccionarOpciones(){
/* INT $opcionUserValido, ARRAY $menu */

                                                         // Array indexeado
    $menu = [
        1 => '  Jugar al tateti',
        2 => '  Mostrar un juego',
        3 => '  Mostrar el primer juego ganador',
        4 => '  Mostrar el porcentaje de juegos ganados',
        5 => '  Mostrar resumen de jugador',
        6 => '  Mostrar listado de juegos ordenados por jugador O',
        7 => '  Salir'
    ];

    foreach ($menu as $indice => $opcion) {
        echo $indice.") ".$opcion."\n";
    }

    $opcionUserValido = solicitarNumeroEntre(1,7);                  // Reutilizamos la funcion del archivo tateti.php

    return $opcionUserValido;                                       // Debe retornar el numero del menu elegido.
}


//                   -- TERCER PUNTO DEL TRABAJO PRACTICO --

 /** 
 * Aca reutilizamos la funcion solicitarNumeroEntre($min,$max) del archivo tateti.php
 * Nos devuelve un numero valido segun los parametros formales que hayamos ingresado, en este caso seria 1 - 7
 */



 //                -- CUARTO PUNTO DEL TRABAJO PRACTICO -- 

/**  
 * Recibimos por usuario el numero del juego solicitado junto con el array a analizar y MOSTRAMOS POR PANTALLA datos del juego.
* @param ARRAY $listadeArrays
* @param INT $indiceJuego
* @return void
*/

function mostrarDatosJuego ($listadeArrays,$indiceJuego){ //
/* STRING $resultado */

$resultado = "";

    if($listadeArrays[$indiceJuego]["puntosCruz"] > $listadeArrays[$indiceJuego]["puntosCirculo"]){
        $resultado = "Gano Cruz (X)";
    }elseif($listadeArrays[$indiceJuego]["puntosCruz"] < $listadeArrays[$indiceJuego]["puntosCirculo"]){
        $resultado = "Gano Circulo (O)";
    }else{
        $resultado = "Empate";
    }

echo "********************"."\n";
echo "Juego de tateti numero: ".($indiceJuego+1)."     ($resultado)"."\n"; // Aca sumo para devolver al usuario el numero del juego real y no mi indice.
echo "Jugador X: ".$listadeArrays[$indiceJuego]["jugadorCruz"]." obtuvo ".$listadeArrays[$indiceJuego]["puntosCruz"]." puntos"."\n";
echo "Jugador O: ".$listadeArrays[$indiceJuego]["jugadorCirculo"]." obtuvo ".$listadeArrays[$indiceJuego]["puntosCirculo"]." puntos"."\n";
echo "********************"."\n";
}

//               -- QUINTO PUNTO DEL TRABAJO PRACTICO -- 

/**  
* Recibimos como parametro dos arrays, uno que contiene la coleccion de juegos y otro con datos de un nuevo juego para RETORNAR la coleccion modificada con el nuevo juego.
* @param ARRAY $coleccion
* @param ARRAY $juegoAgregar
* @return ARRAY
*/
function agregarJuego($coleccion, $juegoAgregar){
/* ARRAY $coleccion */

    $coleccion[] = $juegoAgregar; // Con $coleccion[] nos aseguramos que el juego se agrege en la ultima posicion

    return $coleccion;
}

//               -- SEXTO PUNTO DEL TRABAJO PRACTICO -- 

/**  
* Funcion que dada una coleccion de juegos y un nombre nos RETORNE el indice en el cual el jugador gano alguna vez o -1 si nunca gano 
* @param ARRAY $arrayColeccion 
* @param STRING $jugadorAnalisar
* @return INT
*/

 function primerJuegoGanadoxJugador($coleccionTotal, $jugadorGanador){
/* INT $indice, $totalJuegos, $puntosX, $puntosO 
   ARRAY $juego
   STRING $jugadorX, $jugadorO */

    $indice = 0;                                             // Inicializamos el indice ya que usamos while
    $totalJuegos = count($coleccionTotal);                  // Contamos los cant. de juegos del array
    $indiceGanadoroPerdedor = -1; 

    while ($indice < $totalJuegos && $indiceGanadoroPerdedor <> $indice){         // Aca usamos while porque solo necesitamos el primer juego que gano, no hace falta que lo recorra todo (Aunque puede terminar haciendolo si gana en el ultimo indice)

        $juego = $coleccionTotal[$indice];                  // Obtenemos el juego actual
        $jugadorX = strtolower($juego["jugadorCruz"]); 
        $jugadorO = strtolower($juego["jugadorCirculo"]); 
        $puntosX = $juego["puntosCruz"];
        $puntosO = $juego["puntosCirculo"];
            
            if (($jugadorX == $jugadorGanador && $puntosX > $puntosO) || ($jugadorO == $jugadorGanador && $puntosX < $puntosO)){
                
                $indiceGanadoroPerdedor = $indice;
            }
        $indice++; 
        }              
    return $indiceGanadoroPerdedor; 
}


//               -- SEPTIMO PUNTO DEL TRABAJO PRACTICO -- 

/** Funcion que dada una coleccion de juegos y un nombre nos RETORNARA un resumen del jugador en formato array.
 * (Juegos ganados, juegos perdidos, juegos empatados y puntos acumulados en total)
* @param ARRAY $coleccionTotal
* @param STRING $nombreJugador
* @return ARRAY
*/

function resumenJugador($coleccionTotal, $nombreJugador){
/* ARRAY $resumen INT $puntosX, $puntosO STRING $jugadorX, $jugadorO */

    $resumen =[                                             // Declaramos un nuevo array para completar la informacion individual del jugador requerido por parametro.
        'nombre' => $nombreJugador,
        'juegosGanados' => 0,                               // Inicializamos las variables contadoras
        'juegosPerdidos' => 0,                              // Contadora
        'juegosEmpatados' => 0,                             // Contadora
        'puntosAcumulados' => 0                             // Acumulable
        ];

    foreach ($coleccionTotal as $juego) {
        
        $jugadorX = strtolower($juego['jugadorCruz']);       
        $jugadorO = strtolower($juego['jugadorCirculo']);    
        $puntosX = $juego['puntosCruz'];                     
        $puntosO = $juego['puntosCirculo'];                 

        if ($jugadorX == strtolower($nombreJugador)){      // Con esta condicion, en cada recorrido comparamos el nombre ingresado por parametro con el iterado, recopilando informacion 
            if($puntosX > $puntosO){
                $resumen['juegosGanados']++;               // Si gano un juego
            } elseif($puntosX < $puntosO){
                $resumen['juegosPerdidos']++;              // Si perdio un juego
            } else{
                $resumen['juegosEmpatados']++;             // Si lo empato
            }
            $resumen['puntosAcumulados'] = $resumen['puntosAcumulados'] + $puntosX;         // En caso de ganar, sumamos los puntos otorgados

        }elseif ($jugadorO == strtolower($nombreJugador)){                      // Mismo caso que arriba pero analizando si el jugador le toco ser O
            if ($puntosO > $puntosX){
                $resumen['juegosGanados'] = $resumen['juegosGanados'] + 1;      // Para evitar tanto codigo, resumi con "++".
            }elseif($puntosO < $puntosX){
                $resumen['juegosPerdidos']++;
            }else{
                $resumen['juegosEmpatados']++;
            }
            $resumen['puntosAcumulados'] += $puntosO;                           // Para evitar tanto codigo, resumi con "+=".
        }
    }
return $resumen;
}

            //               -- OCTAVO PUNTO DEL TRABAJO PRACTICO -- 

 /**
  * Solicita al usuario que ingrese X o O y RETORNA el simbolo elegido, en caso de no ser ninguno de los dos simbolos, lo pide nuevamente.
  *        Al no tener un parametro formal, la declaracion de parametros esta vacia
  * @return STRING
  */

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
 * RETORNA la cantidad de juegos ganados en total de toda la coleccion, si es empate no cuenta.
 * @param array $coleccionJuegos
 * @return INT
 */

function juegosGanadosTotal($coleccionJuegos){
/* INT $juegosGanados */

    $juegosGanados = 0;
    
    foreach ($coleccionJuegos as $juego) {

        if ($juego['puntosCruz'] != $juego['puntosCirculo']) {          // Si son diferentes es porque alguno gano.
            $juegosGanados++;
        }
    }
    
    return $juegosGanados;
}

            //            -- DECIMO PUNTO DEL TRABAJO PRACTICO -- 

/**
 * Dada una colección de juegos y un símbolo (X ó O) RETORNA la cantidad de juegos ganados por el símbolo.
 * @param array $coleccionJuegos
 * @param string $simbolo
 * @return INT
 */

function juegosGanadosPorSimbolo($coleccionJuegos, $simbolo){
/* INT $juegosGanados, $puntosX, $puntosO */

    $juegosGanados = 0;

         foreach ($coleccionJuegos as $juego){
            $puntosX = $juego['puntosCruz'];     
            $puntosO = $juego['puntosCirculo'];

            if ($simbolo == "X" && $puntosX > $puntosO){                    // Si el simbolo que viene por parametro es X y GANA, sumamos ganados
                 $juegosGanados++;
            }elseif($simbolo == "O" && $puntosO > $puntosX){                // Si el simbolo que viene por parametro es O y GANA, sumamos ganados
                $juegosGanados++;
            }
        }
    
    return $juegosGanados;           
}

                //            -- ONCEAVO PUNTO DEL TRABAJO PRACTICO -- 
    
/**
 * Dado dos valores, compara cual es mayor, menor o igual (En este caso es alfabetico) para RETORNAR un ENTERO que sea interpretado por la funcion uasort segun corresponda.
 * @param $juegoUno
 * @param $juegosDos
 * @return INT
 */

function ordenAlfabetico($juegoUno,$juegoDos){
/* INT $ordenado */

    $ordenado = 0;

    if($juegoUno['jugadorCirculo']>$juegoDos['jugadorCirculo']){     
        $ordenado = 1;
    }elseif($juegoUno['jugadorCirculo']<$juegoDos['jugadorCirculo']){ 
        $ordenado = -1;
    }else{
        $ordenado = 0;
    }

    return $ordenado;
}

/**
 * Ordena un array con la funcion uasort, en este caso el orden es alfabetico (ordenAlfabetico) y MUESTRA EN PANTALLA el array ordenado.
 * @param ARRAY $arrayAordenar
 * @return void
 */

function ordenarNombreO ($arrayAordenar){

   uasort($arrayAordenar,"ordenAlfabetico");
   print_r($arrayAordenar);
}


//            -- DOCEAVO PUNTO DEL TRABAJO PRACTICO -- 

                                        /**************************************/
                                        /*********** PROGRAMA PRINCIPAL *******/
                                        /**************************************/

                                        //Declaración de variables:

/*
INT $opcion, $numJuego, $juegoAmostrar, $indiceGanador, $juegosGanadosXsimbolo, $juegosGanadosTotal, $arrayResumen 
ARRAY $juegos, $nuevoJuego
STRING $nombreJugador, $simboloGanador, $nombreResumen
FLOAT $porcentajeSimbolo
*/
                                        //Funciones predefinidas por PHP usadas:

// ucfirst(); Convierte la primera Letra de una secuencia string en mayuscula (ejemplo => Ejemplo)
// strtolower(); Convierte una cadena de string en minuscula (eJeMpLo => ejemplo)
// uasort (); Ordena un array con una function que determina antes el usuario (Alfabeticamente en este caso)
// count (); Cuenta el número de elementos en un array.
// include_once (); Se utiliza para incluir y ejecutar un archivo PHP en el código actual. (En este caso, tateti.php)

                                        //Inicialización de variables:

$juegos = cargarJuegos(); // Cargamos la coleccion de juegos de ejemplo.


echo "Juego del TaTeTi"."\n";
echo "Elija la opcion deseada con el numero correspondiente: "."\n";
echo "\n";

do {
    $opcion = (int)seleccionarOpciones();             // Aca uso int por si el usuario ingresa un numero entre 1 y 7 pero con coma, no es una funcion, solo actua como convertidor a INT (entero)


    // Switch es una estructura de control que permite ejecutar diferentes lineas de codigo segun el valor de la expresion.


    switch ($opcion){
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
                    mostrarDatosJuego($juegos,$indiceGanador)."\n";          // Si no gano, nos devuelve -1 y mostramos el mensaje de que nunca gano, sino mostramos los datos del juego segun el indice retornado.
                }else{
                    echo "El jugador: ".ucfirst($nombreJugador)." nunca ha ganado."."\n";
                }
            break;

        case 4: 
            //El usuario eligio la opcion de: 'Mostrar el porcentaje de juegos ganados por X o por 0

            echo "Eliga el simbolo del que desea saber el porcentaje de juegos ganados: ";

            $simboloGanador = eleccionSimboloXO(); 
            $juegosGanadosXsimbolo = juegosGanadosPorSimbolo($juegos, $simboloGanador);
            $juegosGanadosTotal = juegosGanadosTotal($juegos);
                 if ($juegosGanadosTotal != 0){
                    $porcentajeSimbolo = $juegosGanadosXsimbolo * 100 / $juegosGanadosTotal;
                    echo "El simbolo: ".$simboloGanador." gano el: ".$porcentajeSimbolo."%, de los juegos"."\n";
                }else{
                    echo "Todavia no hay ningun juego ganado como para determinar el porcentaje de: ".$simboloGanador."\n";
                }

            break;  
            
        case 5: 
                //El usuario eligio la opcion de: 'Mostrar resumen de jugador' 

            echo "Ingresa el nombre del jugador del cual desea un resumen: "."\n";
            $nombreResumen = strtolower(trim(fgets(STDIN))); 
            $arrayResumen = resumenJugador($juegos, $nombreResumen); // Creamos un array asociativo para recibir toda la info que nos retorna la funcion.

                echo "*************************************"."\n";
                echo "Jugador: " .ucfirst($arrayResumen['nombre'])."\n";
                echo "Gano: " . $arrayResumen['juegosGanados'] . " juegos"."\n";
                echo "Perdio: " . $arrayResumen['juegosPerdidos'] . " juegos"."\n";
                echo "Empato: " . $arrayResumen['juegosEmpatados'] . " juegos"."\n";
                echo "Total de puntos acumulados: " . $arrayResumen['puntosAcumulados'] . " puntos"."\n";
                echo "*************************************"."\n";
            break; 

        case 6: 
                //El usuario eligio la opcion de: 'Mostrar listado de juegos ordenados por jugador O'
        
            ordenarNombreO($juegos);
            break; 
    }

} while ($opcion != 7);

// Repetira mientras la opcion elegida sea distinta a "7".

