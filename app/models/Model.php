<?php

class Model extends Eloquent {
	protected $table = 'Models';
	//protected $fillable = array('name', 'id');
	protected $guarded = array();
 	public function getKeyName(){
    	return "idModels";
  }
}

