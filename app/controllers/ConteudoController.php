<?php

class ConteudoController extends BaseController {


	public function Index()
	{
		$carros = DB::table('Cars')->join('Images', 'Cars.idCars', '=', 'Images.idCars')->join('Models','Cars.idModels','=','Models.idModels')->groupBy('Cars.idCars')->get();
	
		return View::make('carros.carros', compact('carros') );
	}

}
