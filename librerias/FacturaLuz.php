<?php

require_once 'Factura.php';

class FacturaLuz extends Factura {

  const precioKw = 0.15;
  private $kilowats;

  public function __construct($id,$fecha,$kilowats) {
    parent::__construct($id,'Luz',$fecha,0);
    $this->kilowats = $kilowats;
    $this->calcularTotal();
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

  public function calcularTotal() {
    $this->calcularMonto();
    return $this->monto;
  }

}
