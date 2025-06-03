<?php



class MascotaEntidad {
  Private $idmascota;
  private $idpropetario;
  private $tipo;
  private $nombre;

  private $color;
  private $genero;

  private $vive;


  //Metodo  magico de acceso
 public function __GET($atributo): mixed{
  return  $this -> $atributo;
 }

 public function __SET($atributo, $valor):void{
      $this ->$atributo= $valor;
 }

}