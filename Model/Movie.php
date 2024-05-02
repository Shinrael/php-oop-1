<?php 

class Movie{
  public $name;
  public $plot;

  function __construct(string $_name, string $_plot){
    $this->name = $_name;
    $this->plot = $_plot;
  }

  public function getFullMovie(){
    return $this->name . ' : ' . $this->plot;
  }
}

?>