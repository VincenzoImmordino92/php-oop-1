<?php
class Movie extends Production{
  public $publisher_year;
  public $running_time;
  public $cast;

  public function __construct(string $_name,string $_name_production, array $_genre, string $_film_company, Image $_coverImage,string $_publisher_year,int $_running_time,array $_cast){

    parent::__construct($_name, $_name_production, $_genre,  $_film_company, $_coverImage);

    $this->publisher_year = $_publisher_year;
    $this->running_time = $_running_time;
    $this->cast = $_cast;
  }

  public function addActor($actorName){
    $this->cast[] = $actorName;
  }

  public function removeActor($actorName){
    $indexToDelete = array_search($actorName,$this->cast);
    if($indexToDelete !== false){
      array_splice($this->cast, $indexToDelete, 1);
    }
  }
}
?>
