<?php

class Image extends Eloquent {
	protected $table = 'Images';
	//protected $fillable = array('name', 'id');
	protected $guarded = array();

	 public function getKeyName(){
	    return "idImages";
	 }
	 public function car(){
	   return $this->belongsTo('Car','idImages');
	 }


}

