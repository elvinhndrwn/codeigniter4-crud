<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
	protected $table = 'car';

	public function getCar($id = false){
		if($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}