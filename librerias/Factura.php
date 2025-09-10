<?php

require_once __DIR__ . '/../utils/visor.php';

abstract class Factura {
  protected $id;
  protected $tipo;
  protected $fecha;
  protected $monto;

  
  protected function __construct($id, $tipo, $fecha, $monto) {
    $this->id = $id;
    $this->tipo = $tipo;
    $this->fecha = $fecha;
    $this->setMonto($monto);
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
     mostrar("Monto inválido. Debe ser un número no negativo." . PHP_EOL); 
    }
  }
}