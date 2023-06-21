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

    echo "Elija el numero de la opcion deseada"."\n";
    $numOpcionUser = trim(fgets(STDIN));

    $numOpcionUserValido = numeroValido($numOpcionUser);

return $menuOpciones[$numOpcionUser];
}

function numeroValido ($numOpcion){

    $valido = true;

    if (!$numOpcion>=1 && $numOpcion<=7){
        $valido = false;
    }
return $valido;
}


/* Principal */


echo "JUEGO TATETI"."\n";
$opcionElegidaUser = seleccionarOpciones();
echo $opcionElegidaUser."\n";