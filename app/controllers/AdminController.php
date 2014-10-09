<?php

class AdminController extends BaseController {



	public function Index()
	{
		return View::make('admin.area_administrativa');
	}
	public function Create()
	{
		$brands = Brand::all();
		$fuels = Fuel::all();
		$exchanges = Exchange::all();
		$colors = Color::all();
		return View::make('admin.cadastrar_carro', compact('brands', 'fuels', 'exchanges', 'colors'));

	}
	public function Show()
	{

	 	$carro =  Car::orderBy('idCars','DESC')->get();
		return View::make('admin.listar_carro', compact('carro'));
	}
		
	public function Store()
	{

		//---Cria Modelo---//
		$modelo = new Model();
		$modelo->descModelos =Input::get('descModelos');
		$modelo->idBrands = Input::get('idBrands');
		$modelo->save();
		//-------fim Cria Modelo---------//
 		
 		//----Cria Item---//
 		$item = new Item();
		$item->airBag =Input::get('airBag');
		$item->alarme = Input::get('alarme');
		$item->arCondicionado = Input::get('arCondicionado');
		$item->bancoMotoristaAjusteAltura = Input::get('bancoMotoristaAjusteAltura');
		$item->save();
 		//-----fim cria item--------//

		//-----Pega último registro para cadastrar o carro------//
 	    $lastModeloRecord =  Model::all()->last();
 	    $lastItemoRecord =  Item::all()->last();
		//----------------------------------------//

		//----Cria Carro---//
		$carro = new Car();
		$carro->idFuels = Input::get('idFuels');
		$carro->idExchange = Input::get('idExchange');
		$carro->idItems = $lastItemoRecord->idItems;
		$carro->idColors = Input::get('idColors');
		$carro->idModels = $lastModeloRecord->idModels;
		$carro->placaCarro = Input::get('placaCarro');
		$carro->anoModelo = Input::get('anoModelo');
		$carro->precoCarro = Input::get('precoCarro');
		$carro->quilometragemCarro = Input::get('quilometragemCarro');
		//print_r($carro);
		$carro->save();
		//--Fim Cria Carro--//

 		$lastCarroRecord =  Car::all()->last();

		foreach (Input::file("imagem") as $imagem) 
		{
			$img = new Image();
			$img->idCars = $lastCarroRecord->idCars;

			$filename 		 =  Time(). $imagem->getClientOriginalName();
			$img->pathImagem = 'img/carros/'. $filename;
			$imagem->move('img/carros', $filename);
			$img->save();
		}
		return Redirect::action('AdminController@show');
	}




}
