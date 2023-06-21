<?php

/* function cargarJuegos(){

    $coleccionJuegos[0] = ["jugadorCruz"=> "Sandra" , "jugadorCirculo" => "Mario", "puntosCruz"=> 5, “puntosCirculo” => 0];
    $coleccionJuegos[1] = ["jugadorCruz"=> "Mario" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 1, “puntosCirculo” => 1];
    $coleccionJuegos[2] = ["jugadorCruz"=> "German" , "jugadorCirculo" => "Roberto", "puntosCruz"=> 2, “puntosCirculo” => 0];
    $coleccionJuegos[3] = ["jugadorCruz"=> "Lucas" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 1, “puntosCirculo” => 1];
    $coleccionJuegos[4] = ["jugadorCruz"=> "Violeta" , "jugadorCirculo" => "Ana", "puntosCruz"=> 0, “puntosCirculo” => 0];
    $coleccionJuegos[5] = ["jugadorCruz"=> "Lucia" , "jugadorCirculo" => "Jazmin", "puntosCruz"=> 2, “puntosCirculo” => 0];
    $coleccionJuegos[6] = ["jugadorCruz"=> "Romina" , "jugadorCirculo" => "German", "puntosCruz"=> 1, “puntosCirculo” => 1];
    $coleccionJuegos[7] = ["jugadorCruz"=> "Jennifer" , "jugadorCirculo" => "Alberto", "puntosCruz"=> 5, “puntosCirculo” => 0];
    $coleccionJuegos[8] = ["jugadorCruz"=> "Alberto" , "jugadorCirculo" => "Sandra", "puntosCruz"=> 0, “puntosCirculo” => 2];
    $coleccionJuegos[9] = ["jugadorCruz"=> "Roberto" , "jugadorCirculo" => "Mario", "puntosCruz"=> 0, “puntosCirculo” => 5];

    return $coleccionJuegos;
}

*/

/** Dispone un menu del juego tateti con diferentes opciones
* @param ARRAY $menuOpciones
* @return ARRAY
*/
function seleccionarOpciones (){

    $menuOpciones[1] = "1) Jugar al tateti";
    $menuOpciones[2] = "2) Mostrar un juego";
    $menuOpciones[3] = "3) Mostrar el primer juego ganador";
    $menuOpciones[4] = "4) Mostrar el porcentaje de juegos ganados";
    $menuOpciones[5] = "5) Mostrar resumen de jugador";
    $menuOpciones[6] = "6) Mostrar listado de juegos ordenados por jugador O";
    $menuOpciones[7] = "7) Salir!";

    echo $menuOpciones[1]."\n";
    echo $menuOpciones[2]."\n"; // Puedo simplificar este paso?
    echo $menuOpciones[3]."\n";
    echo $menuOpciones[4]."\n";
    echo $menuOpciones[5]."\n";
    echo $menuOpciones[6]."\n";
    echo $menuOpciones[7]."\n";

    echo "Elija el numero de la opcion deseada (1 - 7)"."\n";
    $numOpcionUser = trim(fgets(STDIN));
    $numOpcionUserValido = numeroValido($numOpcionUser); // Consultamos con la funcion para saber si esta entre 1 y 7

    while(!$numOpcionUserValido){

        echo "El numero ingresado no es valido, ingrese nuevamente su opcion: "."\n";
        $numOpcionUser = trim(fgets(STDIN));    
        $numOpcionUserValido = numeroValido($numOpcionUser);
    }

return $menuOpciones[$numOpcionUser];
}

/** Determina si un numero esta en el rango de 1-7 y devuelve un booleano true en caso de estarlo 
 * @param $numOpcion
 * @return Boolean
*/
function numeroValido ($numOpcion){
// Variable interna BOOLEANA $valido

    $valido = false;

    if ($numOpcion>=1 && $numOpcion<=7){
        $valido = true;
    }
return $valido;
}


/* Principal */


echo "JUEGO TATETI"."\n";
$opcionElegidaUser = seleccionarOpciones();
echo $opcionElegidaUser."\n";