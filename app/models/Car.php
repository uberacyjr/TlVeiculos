<?php

class Car extends Eloquent {
	protected $table = 'Cars';
	protected $fillable = array('placaCarro');
	protected $guarded = array();

  public function getKeyName()
  {
    return "idCars";
  }
  public function model()
  {
    return $this->hasOne('Model','idModels','idModels');
  }
  public function image()
  {
    return $this->hasOne('Image','idCars','idCars')->groupBy('idCars');
  }

}

