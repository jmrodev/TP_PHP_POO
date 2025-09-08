<?php

require_once 'factura.php';

class facturaLuz extends factura {

  const precioKw = 0.15;
  private $kilowats;

  public function __construct($id,$fecha,$monto,$kilowats) {
    parent::__construct($id,'Luz',$fecha,$monto);
    $this->kilowats = $kilowats;
  }

  public function calcularMonto() {
    $this->monto = $this->kilowats * self::precioKw;
  }

  public function getKilowats() {
    return $this->kilowats;
  }

  public function setKilowats($kilowats) {
    $this->kilowats = $kilowats;
  }

  // Implementación del método abstracto calcularTotal()
  public function calcularTotal() {
    $this->calcularMonto(); // Primero, calculamos el monto específico de la luz
    return $this->monto;    // Luego, devolvemos el monto calculado
  }

}
