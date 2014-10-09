<?php



/*
	Rota para página incial do projeto
*/
Route::get('/', function()
{

	$lastCarroRecord =  Item::all()->last();
	print_r($lastCarroRecord);

	return View::make('index');
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