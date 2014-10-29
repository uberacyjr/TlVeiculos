<?php

class Model extends Eloquent {
	protected $table = 'Models';
	//protected $fillable = array('name', 'id');
	protected $guarded = array();
 	public function getKeyName(){
    	return "idModels";
  	}
  	public function car()
    {
        return $this->belongsTo('Car','idModels');
    }
    public function brand()
    {
        return $this->hasOne('Brand','idBrands','idBrands');
    }
}

