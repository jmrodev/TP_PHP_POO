<?php

require_once 'librerias/facturaLuz.php';
require_once 'librerias/facturaAgua.php';
require_once 'utils/visor.php';

$facturas = [];

$factura1 = new facturaLuz(1, '2023-01-15', 0, 350);
$factura2 = new facturaAgua(2, '2023-01-20', 0, 25);
$factura3 = new facturaLuz(3, '2023-02-15', 0, 400);
$factura4 = new facturaAgua(4, '2023-02-20', 0, 30);
$factura5 = new facturaLuz(5, '2023-03-15', 0, 300);
$factura6 = new facturaAgua(6, '2023-03-20', 0, 20);
