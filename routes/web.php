<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return("Olá mundo!");
});

//agrupamento criando a controller com a flag --resource
Route::group(['prefix' => 'admin'], function(){
	Route::resource('clientes', 'CustomersController');
});


//SEGUE PLANEJAMENTO DAS ROTAS QUE IREI USAR (EX)
// /admin/clientes GET
// /admin/clientes/1 GET
// /admin/cliente POST << Criar novo
// /admin/cliente/1 PUT << Atualizar existente
// /admin/cliente/1 DELETE << deletar existente

//JEITO ESPARTANO
/*
Route::group(['prefix' => 'admin'], function(){
	Route::get('clientes', ['as' => 'customer.index', 'uses' => 'CustomersController@index']);
	Route::get('cliente/{id}', ['as' => 'customer.get', 'uses' => 'CustomersController@get']);
	Route::post('cliente', ['as' => 'customer.create', 'uses' => 'CustomersController@create']);
	Route::put('cliente/{id}', ['as' => 'customer.update', 'uses' => 'CustomersController@update']);
	Route::delete('cliente{id}', ['as' => 'customer.delete', 'uses' => 'CustomersController@delete']);
});
*/
