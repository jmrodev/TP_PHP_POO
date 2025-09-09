<?php

require_once 'librerias/facturaLuz.php';
require_once 'librerias/facturaGas.php';
require_once 'utils/visor.php';
require_once 'utils/menu.php';

$facturas = [];

$factura1 = new facturaLuz(1, '2023-01-15', 0, 350);
$factura2 = new facturaGas(2, '2023-01-20', 0, 25);
$factura3 = new facturaLuz(3, '2023-02-15', 0, 400);
$factura4 = new facturaGas(4, '2023-02-20', 0, 30);
$factura5 = new facturaLuz(5, '2023-03-15', 0, 300);
$factura6 = new facturaGas(6, '2023-03-20', 0, 20);


$opcionesMenu = [
  "Ver factura de Luz",
  "Ver factura de gas"
];

$opcionSeleccionada = mostrarMenu($opcionesMenu, " Facturas de Servicios");


switch ($opcionSeleccionada) {
  case 1:
    $facturas = [$factura1, $factura3, $factura5];
    break;
  case 2:
    $facturas = [$factura2, $factura4, $factura6];
    break;
  default:
    mostrar("Opción no válida." . PHP_EOL);
    exit;
}
mostrarFacturas($facturas);

