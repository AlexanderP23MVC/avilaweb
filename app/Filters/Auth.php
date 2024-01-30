<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Controllers\Login;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        var_dump(session()->get('loggin'));
        if(session()->get('loggin')== true){
            echo 'EL USUARIO ESTA LOGUEADO';
            //return redirect()->to(base_url('/Dashboard'))->with('mensaje','1');
           // return redirect()->to(base_url('/Dashboard'))->with('mensaje','1');
        }else{
            echo "error de usuario";
            return redirect()->to(base_url('/'))->with('mensaje','1');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}