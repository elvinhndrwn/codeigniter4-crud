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

    public function car_detail($id)
    {
        $car = $this->carModel->getCar($id);

        $data = [
            "car" => $car
        ];
        return view('detail', $data);
    }

    public function form_create(){
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('add', $data);
    }

    public function save_data(){

        // Validation input
        if(!$this->validate([
            'name' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'min_length' => '{field} minimal 3 karakter.',
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/create')->withInput()->with('validation', $validation);
        }

        $this->carModel->save([
            'name' => $this->request->getVar('name'),
            'merk' => $this->request->getVar('merk'),
            'year' => $this->request->getVar('year')
        ]);

        session()->setFlashdata('alert', 'Save successfully!');
        return redirect()->to('/');

    }

    public function car_delete($id){
        $this->carModel->delete($id);
        return redirect()->to('/');
    }

    public function form_edit($id){
        $data = [
            'validation' => \Config\Services::validation(),
            'car' => $this->carModel->getCar($id)
        ];
        return view('edit', $data);
    }

    public function update_data($id){
         // Validation input
        if(!$this->validate([
            'name' => [
                'rules' => 'required|min_length[3]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'min_length' => '{field} minimal 3 karakter.',
                ]
            ]
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/edit/'.$id)->withInput()->with('validation', $validation);
        }

        $this->carModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'merk' => $this->request->getVar('merk'),
            'year' => $this->request->getVar('year')
        ]);

        session()->setFlashdata('alert', 'Update successfully!');
        return redirect()->to('/');
    }
}
