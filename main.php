<?php

require_once 'librerias/FacturaLuz.php';
require_once 'librerias/FacturaGas.php';
require_once 'utils/visor.php';
require_once 'utils/menu.php';

$facturas = [];

$factura1 = new FacturaLuz(1, '2023-01-15', 350);
$factura2 = new FacturaGas(2, '2023-01-20', 25);
$factura3 = new FacturaLuz(3, '2023-02-15', 400);
$factura4 = new FacturaGas(4, '2023-02-20', 30);
$factura5 = new FacturaLuz(5, '2023-03-15', 300);
$factura6 = new FacturaGas(6, '2023-03-20', 20);


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

