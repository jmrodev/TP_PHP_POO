<?php

abstract class factura {
  protected $id;
  protected $tipo;
  protected $fecha;
  protected $monto;

  
  protected function __construct($id, $tipo, $fecha, $monto) {
    $this->id = $id;
    $this->tipo = $tipo;
    $this->fecha = $fecha;
    $this->monto = $monto;
  }

  abstract public function calcularTotal();

  public function getId() {
    return $this->id;
  }

  public function getTipo() {
    return $this->tipo;
  }

  public function getFecha() {
    return $this->fecha;
  }

  public function getMonto() {
    return $this->monto;
  }

  public function setMonto($monto) {
    $this->monto = $monto;
  }

}
