<?php

function mostrar($texto) {
  system('clear');
    echo $texto;
}

function mostrarFacturas($facturas) { 
    foreach ($facturas as $factura) {
        $factura->calcularTotal();
        if ($factura instanceof facturaLuz) {
            mostrar("Factura de Luz - ID: {$factura->getId()}, Fecha: {$factura->getFecha()}, Kilowatts: {$factura->getKilowats()}, Monto: {$factura->getMonto()} USD" . PHP_EOL);
        } elseif ($factura instanceof FacturaGas) {
            mostrar("Factura de Gas - ID: {$factura->getId()}, Fecha: {$factura->getFecha()}, Metros Cúbicos: {$factura->getMetrosCubicos()}, Monto: {$factura->getMonto()} USD" . PHP_EOL);
        }
    }
}
