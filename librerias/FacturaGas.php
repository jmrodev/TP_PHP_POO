<?php

require_once 'Factura.php';

class FacturaGas extends Factura {
  
    const PRECIO_METRO_CUBICO = 0.5;
    private $metrosCubicos;

    public function __construct($id, $fecha, $metrosCubicos) {
        parent::__construct($id,'Gas', $fecha, 0);
        $this->metrosCubicos = $metrosCubicos;
        $this->calcularTotal(); // Calculamos el monto al crear el objeto
    }

    public function calcularCosto() {
        return $this->metrosCubicos * self::PRECIO_METRO_CUBICO;
    }

    public function getMetrosCubicos() {
        return $this->metrosCubicos;
    }

    public function calcularTotal() {
        $this->monto = $this->calcularCosto();
        return $this->monto;
    }
}
