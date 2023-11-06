<?php
class Movie{
  public $nome;
  public $genere;
  public $durata;
  public $attori;
  public $immagineCopertina;

  public function __costruct(string $_nome, array $_genere,float $_durata, array $_attori ,Image $_immagineCopertina){
    $this->nome = $_nome;
    $this->genere = $_genere;
    $this->durata = $_durata;
    $this->attori = $_attori;
    $this->immagineCopertina = $_immagineCopertina;
  }
}
?>
