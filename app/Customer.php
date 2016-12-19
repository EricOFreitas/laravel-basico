<?php

namespace Charlie;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable = ['name', 'birthdate', 'special_customer', 'city', 'state'];
	
	//inves de apresentar 0 ou 1 ele mostra true ou false e também fiz com que a data retorne como tipo date
	protected $casts = [
		'special_customer' => 'boolean',
		'birthdate' => 'date'
	];
	
    public function purchases(){
		return $this->hasMany(Purchase::class);
	}
}
