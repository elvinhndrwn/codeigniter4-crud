<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
	protected $table = 'car';
	protected $allowedFields = ['name', 'merk', 'year'];

	public function getCar($id = false){
		if($id == false){
			return $this->findAll();
		}

		return $this->where(['id' => $id])->first();
	}
}