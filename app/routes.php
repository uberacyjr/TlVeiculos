<?php



/*
	Rota para página incial do projeto
*/
Route::get('/', function()
{

	return View::make('index');

});
Route::get('/admin', function()
{

	return View::make('admin.area_administrativa');

});
Route::get('/logar', function()
{

	return View::make('admin.logar_usuario');

});


Route::get('carros/quemsomos', function()
{

	return View::make('carros.quemsomos');

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
Route::put('admin/update', 'AdminController@update');
//Route::controller('admin', 'AdminController');
Route::resource('admin', 'AdminController');
Route::resource('conteudo', 'ConteudoController');
Route::resource('image', 'ImageController');