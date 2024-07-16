<?php

class House  {

public  $streetName;
public $streetNumber;



public function __construct($streetName,$streetNr){
$this->streetName = $streetName;
$this->streetNumber = $streetNr;

}

public function getStreetName(){
return $this->streetName;    

}
public function getStreetNr(){
return $this->streetNumber;
}


}


