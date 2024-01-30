<?php

namespace App\Controllers\Login;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        echo view('admin/login.php');
    }
   
}
