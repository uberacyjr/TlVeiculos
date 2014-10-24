<?php

class ConteudoController extends BaseController {


	public function Index()
	{
		$carros = DB::table('Cars')->join('Images', 'Cars.idCars', '=', 'Images.idCars')->join('Models','Cars.idModels','=','Models.idModels')->join('Items','Cars.idItems','=','Items.idItems')->groupBy('Cars.idCars')->get();
		

		return View::make('carros.carros', compact('carros') );
	}
	public function show($id)
	{
		$imagem =  Image::findOrFail($id);
		$car = Car::findOrFail($imagem->idCars);
		$model = Model::findOrFail($car->idModels);
		$brand = Brand::findOrFail($model->idBrands);
		$images= Image::where('idCars', '=', $car->idCars)->get();
		$item = Item::findOrFail($car->idItems);
		return View::make('carros.carros_detalhes', compact('imagem','car','model','brand','images', 'item'));
	}

}
