<?php



/*
	Rota para página incial do projeto
*/
Route::get('/', function()
{

	return View::make('index');

});
Route::get('/contatos', function()
{

	return View::make('carros.contatos');

});
Route::get('/admin', function()
{

	return View::make('admin.area_administrativa');

});
Route::get('/login', function()
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

Route::resource('conteudo', 'ConteudoController');

Route::resource('image', 'ImageController');
Route::group(array('before' => 'auth'), function()
{
	Route::resource('admin', 'AdminController');
	return Redirect::to('logar');
});

Route::get('/logout', function()
{
	if (Auth::check())
	{
	    Session::flush();;
	    return Redirect::to('login');
	}
	else
	return  Redirect::to('/');
});


Route::post('login', function()
{

 
        if (Auth::attempt(array('username' =>  Input::get('username'), 'password' => Input::get('password'))))
		{
    		  return Redirect::to('admin');
		}
        else
        {
            return Redirect::to('login');
        }  
});