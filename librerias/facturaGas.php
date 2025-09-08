<?php 

include_once 'librerias/factura.php';

class facturaGas extends factura {

  private $metorsCubicos;


  public function __construct($id, $fecha, $monto, $metorsCubicos) {
    parent::__construct($id, 'Gas', $fecha, $monto);
    $this->metorsCubicos = $metorsCubicos;
  }

  public function calcularTotal() {
    $costoPorMetroCubico = 1.5;
    return $this->metorsCubicos * $costoPorMetroCubico;
  }

  

}
