<?php

namespace App\Controllers;
use App\Models\CarModel;

class Home extends BaseController
{
    protected $carModel;
    public function __construct(){
        $this->carModel = new CarModel();
    }

    public function index()
    {
        $cars = $this->carModel->getCar();

        $data = [
            "cars" => $cars
        ];
        return view('home', $data);
    }
}
