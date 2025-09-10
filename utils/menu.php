<?php

function mostrarMenu($opciones,$titulo="App de Facturas"){
system('clear');
echo "**--  $titulo  --**\n";
$numeroOpcion = 1;

foreach ($opciones as $opcionTexto){
    echo "$numeroOpcion. $opcionTexto\n";
    $numeroOpcion++;
}

$eleccion =readline('Seleccione una opcion: ');
return $eleccion;
}
