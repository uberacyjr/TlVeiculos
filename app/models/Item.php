<?php

class Item extends Eloquent {
	protected $table = 'Items';
	//protected $fillable = array('name', 'id');
	protected $guarded = array();
	 public function getKeyName(){
    	return "idItems";
    }
}

