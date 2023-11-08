<?php
class Production{
  public $name;
  public $name_production;
  public $genre;
  public $film_company;
  public $cover_image;

  public function __construct(string $_name,string $_name_production, array $_genre, string $_film_company, Image $_cover_image){


    $this->name = $_name;
    $this->name_production = $_name_production;
    
    $this->film_company = $_film_company;
    $this->cover_image = $_cover_image;

    if(empty($_genre)){
      throw new Exception("Deve esserci almeno un genere di film");
    }else{
      $this->genre = $_genre;
    }
  }
}
?>