<?php

class Car extends Eloquent {
	protected $table = 'Cars';
	protected $fillable = array('placaCarro');
	protected $guarded = array();

  public function getKeyName(){
    return "idCars";
}

}

