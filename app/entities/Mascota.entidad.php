<?php
/**
 * La entidad contiene todos los datos de la clase
 * Estos datos se utilizaran en]: create()-update()
 */
class MascotaEntidad{
  private $idMascota;
  private $idPropietario;
  private $tipo;
  private $nombre;
  private $color;
  private $genero;
  private $vive;

  //Métodos mágicos de acceso

  public function __GET($atributo){
    return $this-> $atributo;
  }

  public function __SET($atributo,$valor){
    $this->$atributo=$valor;
  }
}