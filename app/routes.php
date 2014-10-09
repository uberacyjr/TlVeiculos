<?php



/*
	Rota para página incial do projeto
*/
Route::get('/', function()
{

	$results = DB::select('select * from Models ');
	print_r($results);

	
	
});

Route::get('/cadastrar_carro', function()
{
	return View::make('index');
});
Route::get('/slider', function()
{
	return View::make('slider');
});

Route::get('/carros', function()
{
	return View::make('carros.carros');
});
Route::get('/carros_detalhes', function()
{
	return View::make('carros.carros_detalhes');
});

//Route::controller('admin', 'AdminController');
Route::resource('admin', 'AdminController');