<?php

require_once 'factura.php';

class FacturaGas extends Factura {
    const PRECIO_METRO_CUBICO = 0.5;
    private $metrosCubicos;

    public function __construct($id, $fecha, $monto, $metrosCubicos) {
        parent::__construct($id,'Gas', $fecha, $monto);
        $this->metrosCubicos = $metrosCubicos;
    }

    public function calcularCosto() {
        return $this->metrosCubicos * self::PRECIO_METRO_CUBICO;
    }

    public function getMetrosCubicos() {
        return $this->metrosCubicos;
    }
}
