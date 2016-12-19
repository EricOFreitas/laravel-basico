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
	
	//LISTAR CUSTOMERS
	//$customers = Charlie\Customer::paginate(10);
	//dumping and die -> solta as informações do array na tela e mata o código
	//dd($customers->toArray());
	//echo $customers->render();
	
	
	//CRIAR NOVO CUSTOMER
	/*
	$customer = new Charlie\Customer();
	$customer->name = 'Eric Freitas';
	$customer->city = 'Votuporanga';
	$customer->state = 'SP';
	$customer->birthdate = '1984-12-06 00:00:00';
	$customer->special_customer = true;
	$customer->save();
	dd($customer->toArray()); 
	*/
	
	
	//ATUALIZAR
	$data = [
		'name' => 'um outro cara',
		'birthdate' => '1989-01-01 00:00:00',
	];
	//trazer customer id 2
	$customer = Charlie\Customer::find(2);
	//$customer->name = "um outro cara";
	//$customer->save();
	$customer->update($data);
});
