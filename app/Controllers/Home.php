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

    public function form_create(){
        return view('add');
    }

    public function save_data(){
        $this->carModel->save([
            'name' => $this->request->getVar('name'),
            'merk' => $this->request->getVar('merk'),
            'year' => $this->request->getVar('year')
        ]);

        session()->setFlashdata('alert', 'Save successfully!');
        return redirect()->to('/');

    }
}
