<?php

class ImageController extends BaseController {




	public function show($id)
	{
	

		$car = Car::findOrFail($id);
		$nome = Model::where('idModels','=',$car->idModels)->first();
		return View::make('imagem.cadastraimagem', compact('nome', 'car'));

	}

	public function store()
	{
		$carroId = Input::get("idCarro");
		$filename 		 =  Time(). Input::file("file")->getClientOriginalName();
		$upload_success = Input::file("file")->move('img/carros', $filename);
		if( $upload_success ) {
				$imagem = new Image();
				$imagem->idCars = $carroId;
			    $imagem->pathImagem = "img/carros/". $filename;
			    $imagem->save();
	        	return Response::json('success', 200);
	        } else {
	        	return Response::json('error', 400);
	        }

	}

}
