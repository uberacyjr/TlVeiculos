<?php

class AdminController extends BaseController {



	public function Index()
	{
		$carros = Car::all();
		return View::make('admin.listar_carro',compact('carros') );
	}
	public function Create()
	{
		$brands = Brand::all();
		$fuels = Fuel::all();
		$exchanges = Exchange::all();
		$colors = Color::all();
		return View::make('admin.cadastrar_carro', compact('brands', 'fuels', 'exchanges', 'colors'));

	}

	public function edit($id)
	{
			$brands = Brand::all();
			$fuels = Fuel::all();
			$exchanges = Exchange::all();
			$colors = Color::all();
		    $car = Car::findOrFail($id);
			$model = Model::where('idModels', '=', $car->idModels)->first();
			$image= Image::where('idCars', '=', $car->idCars);
			$item =  Item::findOrFail($car->idItems);
			return View::make('admin.editar_carro', compact('car','image', 'brands', 'fuels', 'exchanges', 'colors','model', 'item'));	
	}
	public function update($id)
	{

		$modelo = new Model();
		$item = new Item();
		$carro = new Car();
	
		$carro = Car::findOrFail($id);
		$modelo =  Model::findOrFail($carro->idModels);
		$item =  Item::findOrFail($carro->idItems);
		
		$modelo->descModelos =Input::get('descModelos');
		$modelo->idBrands = Input::get('idBrands');
		$modelo->save();

		$item->airBag =Input::get('airBag');
		$item->alarme = Input::get('alarme');
		$item->arCondicionado = Input::get('arCondicionado');
		$item->bancoMotoristaAjusteAltura = Input::get('bancoMotoristaAjusteAltura');
		$item->cdPlayer =Input::get('cdPlayer');
		$item->computadorBordo = Input::get('computadorBordo');
		$item->controleAutomaticoVelocidade = Input::get('controleAutomaticoVelocidade');
		$item->controleTracao = Input::get('controleTracao');
		$item->desembacadorTraseiro =Input::get('desembacadorTraseiro');
		$item->direcaoHidraulica = Input::get('direcaoHidraulica');
		$item->dvdPlayer = Input::get('dvdPlayer');
		$item->encostoCabecaTraseiro = Input::get('encostoCabecaTraseiro');
		$item->farolXenonio =Input::get('farolXenonio');
		$item->freioAbs = Input::get('freioAbs');
		$item->gps = Input::get('gps');
		$item->limpadorTraseiro = Input::get('limpadorTraseiro');
		$item->retrovisorEletrico =Input::get('retrovisorEletrico');
		$item->rodaLigaLeve = Input::get('rodaLigaLeve');
		$item->gps = Input::get('gps');
		$item->sensorChuva = Input::get('sensorChuva');
		$item->sensorEstacionamento =Input::get('sensorEstacionamento');
		$item->tetoSolar = Input::get('tetoSolar');
		$item->tracao4x4 = Input::get('tracao4x4');
		$item->travasEletricas = Input::get('travasEletricas');
		$item->vidrosEletricos =Input::get('vidrosEletricos');
		$item->voltanteRegulagemAltura = Input::get('voltanteRegulagemAltura');
		$item->bancoCouro = Input::get('bancoCouro');
		$item->capotaMaritima = Input::get('capotaMaritima');
		$item->protetorCacamba = Input::get('protetorCacamba');
		$item->radio = Input::get('radio');
		$item->save();
	
		$carro->idFuels = Input::get('idFuels');
		$carro->idExchange = Input::get('idExchange');
		$carro->idItems =$item->idItems;
		$carro->idColors = Input::get('idColors');
		$carro->idModels = $modelo->idModels;
		$carro->placaCarro = Input::get('placaCarro');
		$carro->anoModelo = Input::get('anoModelo');
		$carro->precoCarro = Input::get('precoCarro');
		$carro->quilometragemCarro = Input::get('quilometragemCarro');
		$carro->vendido = Input::get('vendido');
		$carro->obs = Input::get('obs');
		//print_r($carro);
		$carro->save();
		
		return Redirect::action('AdminController@index');

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
		$item->cdPlayer =Input::get('cdPlayer');
		$item->computadorBordo = Input::get('computadorBordo');
		$item->controleAutomaticoVelocidade = Input::get('controleAutomaticoVelocidade');
		$item->controleTracao = Input::get('controleTracao');
		$item->desembacadorTraseiro =Input::get('desembacadorTraseiro');
		$item->direcaoHidraulica = Input::get('direcaoHidraulica');
		$item->dvdPlayer = Input::get('dvdPlayer');
		$item->encostoCabecaTraseiro = Input::get('encostoCabecaTraseiro');
		$item->farolXenonio =Input::get('farolXenonio');
		$item->freioAbs = Input::get('freioAbs');
		$item->gps = Input::get('gps');
		$item->limpadorTraseiro = Input::get('limpadorTraseiro');
		$item->retrovisorEletrico =Input::get('retrovisorEletrico');
		$item->rodaLigaLeve = Input::get('rodaLigaLeve');
		$item->gps = Input::get('gps');
		$item->sensorChuva = Input::get('sensorChuva');
		$item->sensorEstacionamento =Input::get('sensorEstacionamento');
		$item->tetoSolar = Input::get('tetoSolar');
		$item->tracao4x4 = Input::get('tracao4x4');
		$item->travasEletricas = Input::get('travasEletricas');
		$item->vidrosEletricos =Input::get('vidrosEletricos');
		$item->voltanteRegulagemAltura = Input::get('voltanteRegulagemAltura');
		$item->bancoCouro = Input::get('bancoCouro');
		$item->capotaMaritima = Input::get('capotaMaritima');
		$item->protetorCacamba = Input::get('protetorCacamba');
		$item->radio = Input::get('radio');
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
		$carro->obs = Input::get('obs');
		//print_r($carro);
		$carro->save();
		//--Fim Cria Carro--//

		return Redirect::action('AdminController@index');
	}
	public function destroy($id)
	{
			$car = Car::findOrFail($id);
			$model =  Model::findOrFail($car->idModels);
			$item =  Item::findOrFail($car->idItems);
			$imageAux = Image::where('idCars','=', $car->idCars)->get();
			$image = Image::where('idCars','=', $car->idCars)->delete();
			foreach ($imageAux as $images ) 
			{
				 File::delete($images->pathImagem);
			}
			$item->delete();
			$model->delete();
			$car->delete();
		return Redirect::action('AdminController@index');
	}

}
