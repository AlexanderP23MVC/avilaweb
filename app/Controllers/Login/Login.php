<?php

namespace App\Controllers\Login;

use App\Controllers\BaseController;
use App\Models\DashboardModel;


class Login extends BaseController
{
    protected $helpers = ['form'];
    
    public function index()
    {
        echo view('admin/login.php');
    }

    public function obtenerUsuario(){
       
        print_r($_GET);
        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'cedula ' => 'required',
            'telefono' => 'required',
            'edad' => 'required',
            'correo' => 'required',
            'sexo' => 'required',
            'password' => 'required',
            'configPassword' => 'required'

        ];

        if(!$this->validate($rules)){
          return  redirect()->to(base_url('/RegistrarUsuario'))->withInput();
        }


    }

    public function inicioRegUser(){
        

         
        echo view('layout/headerLogin');
        echo view('Dashboard/content/regisUser');
        echo view('layout/footerLogin');

    }
   
}
