<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/headerLogin');
        echo view('index');
        echo view('layout/footerLogin');
        
    }
   
}
