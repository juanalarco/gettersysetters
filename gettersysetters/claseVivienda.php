<?php
/**
 * Ejercicio de Setters y Getters
 * Definicion
 */
class ClaseVivienda
{
  // Declaración de una propiedad
  public $color = 'Verde';
  public $m2 = '800';
  public $plantas = '3';
  public $animales = 'Si';
  // Declaración de un método
  public function mostrarColor() {
      echo '<br>';
      echo 'El color de la vivienda es:';
      echo $this->color;
      echo '<br>';
  }

  public function mostrarm2() {
    echo '<br>';
    echo 'La vivienda tiene :';
    echo $this->m2;
    echo '<br>';
  }

  public function mostrarplantas() {
    echo '<br>';
    echo 'La vivienda tiene :';
    echo $this->plantas;
    echo '<br>';
  }

  public function mostraranimales() {
    echo '<br>';
    echo 'Puedes llevar animales?';
    echo $this->animales;
    echo '<br>';
  }
  //Setter
  public function setColor($cambiarColor){
    $this->color=$cambiarColor;
  }
  public function setm2($cambiarm2){
    $this->m2=$cambiarm2;
  }
  public function setplantas($cambiarplantas){
    $this->plantas=$cambiarplantas;
  }
  public function setanimales($cambiaranimales){
    $this->animales=$cambiaranimales;
  }
  //Getters
  public function getColor(){
    echo $this->color;
  }
  public function getm2() {
    echo $this->m2;
  }
  public function getanimales() {
    echo $this->animales;
  }
  public function getplantas() {
    echo $this->plantas;
  }
}
?>
