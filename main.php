<?php

require_once 'librerias/FacturaLuz.php';
require_once 'librerias/FacturaGas.php';
require_once 'utils/visor.php';
require_once 'utils/menu.php';

// --- Datos (sin cambios) ---
$facturas=[
  $factura1 = new FacturaLuz(1, '2023-01-15', 120),
  $factura2 = new FacturaGas(2, '2023-01-20', 80),
  $factura3 = new FacturaLuz(3, '2023-02-15', 150),
  $factura4 = new FacturaGas(4, '2023-02-18', 60),
  $factura5 = new FacturaLuz(5, '2023-03-10', 200),
  $factura6 = new FacturaGas(6, '2023-03-12', 100)
];


// --- Opciones del Menú (con Salir) ---
$opcionesMenu = [
  "Ver factura de Luz",
  "Ver factura de Gas",
  "Salir"
];


// --- Bucle principal de la aplicación ---
do {
    // Mostramos el menú y obtenemos la opción en CADA iteración
    $opcionSeleccionada = mostrarMenu($opcionesMenu, " Facturas de Servicios");

    switch ($opcionSeleccionada) {
        case 1: // Ver factura de Luz
            $facturas = [$factura1, $factura3, $factura5];
            mostrarFacturas($facturas);
            break;
        case 2: // Ver factura de Gas
            $facturas = [$factura2, $factura4, $factura6];
            mostrarFacturas($facturas);
            break;
        case 3: // Salir
            mostrar("Saliendo del programa." . PHP_EOL);
            break;
        default:
            mostrar("Opción no válida. Intente de nuevo." . PHP_EOL);
            break;
    }

    // Una pequeña pausa para que el usuario pueda leer antes de que el menú se vuelva a mostrar
    if ($opcionSeleccionada != 3) {
        readline("Presione Enter para continuar...");
    }

} while ($opcionSeleccionada != 3); // El bucle continúa mientras no se elija la opción 3 (Salir)
