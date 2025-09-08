<?php


function mostrarMenu($opciones){


echo "**--App de Facturas--**\n";

$numeroOpcion = 1;

foreach ($opciones as $opcionTexto){
    echo "$numeroOpcion. $opcionTexto\n";
    $numeroOpcion++;
}


$eleccion =readline('Seleccione una opcion: ');
return $eleccion;
}
