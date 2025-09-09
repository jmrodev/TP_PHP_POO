<?php

abstract class Factura {
  private $id;
  private $tipo;
  private $fecha;
  private $monto;

  
  protected function __construct($id, $tipo, $fecha, $monto) {
    $this->id = $id;
    $this->tipo = $tipo;
    $this->fecha = $fecha;
    $this->setMonto($monto); // Usamos el setter para la validación inicial
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


  public function setId($id) {
   $this->id = $id;  
  }

  public function setTipo($tipo){
    $this->tipo = $tipo;
  }

  public function setFecha($fecha){
    $this->fecha = $fecha;
  }


  public function setMonto($monto) {
    if (is_numeric($monto) && $monto >= 0) {
        $this->monto = $monto;
    } else {
        // Si el monto no es válido, lo dejamos en 0 por seguridad.
        $this->monto = 0;
    }
  }
}
