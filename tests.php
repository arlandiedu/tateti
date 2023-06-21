<?php

/** Determina si un numero esta entre el rango de 1 y 7, en caso de ser valido devuelve el numero ingresado.
 * Si el numero no es valido, sigue pidiendo un numero hasta que el ingresado este dentro de los parametros esperados (1-7) 
 * @param $numOpcion
 * @return INT
*/
function numeroValido($numOpcionUser){

    while($numOpcionUser<1 || $numOpcionUser>7){
        echo "El numero ingresado es incorecto, ingrese nuevamente su opcion numerica: ";
        $numOpcionUser = trim(fgets(STDIN));
}
return $numOpcionUser;
}

/** Dispone un menu del juego tateti con diferentes opciones
* @param ARRAY $menuOpciones
* @return INT
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
    $numOpcionUserValido = numeroValido($numOpcionUser); // Consultamos si el numero esta dentro de los rangos, en caso de no estarlo.. la funcion entra en loop hasta que se elige la opcion correcta.

return $numOpcionUserValido; // Debe retornar el numero del menu elegido.
}


/* Principal */


echo "Juego del TaTeTi"."\n";
$opcionElegidaUser = seleccionarOpciones();
echo $opcionElegidaUser."\n";



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
