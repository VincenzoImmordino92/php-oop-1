<?php

class Image{
  public $percorsoImmagine;
  public $nomeImmagine;
  public $type = 'image';

  public function __construct($_percorsoImmagine,$_nomeImmagine){
    $this->percorsoImmagine = $_percorsoImmagine;
    $this->nomeImmagine = $_nomeImmagine;
  }
}

?>