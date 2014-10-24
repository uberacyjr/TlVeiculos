<?php

class Brand extends Eloquent {
	protected $table = 'Brands';
	//protected $fillable = array('name', 'id');
	protected $guarded = array();
  public function getKeyName(){
    return "idBrands";
}
}

