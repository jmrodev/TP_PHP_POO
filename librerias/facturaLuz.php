<?php

require_once 'factura.php';

class facturaLuz extends factura {

  const precioKw = 0.15;
  private $kilowats;

  public function __construct($id,$fecha,$monto,$kilowats) {
    parent::__construct($id,$fecha,$monto);
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

}
