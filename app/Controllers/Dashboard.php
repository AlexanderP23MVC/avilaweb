<?php

namespace App\Controllers;
use App\Models\DashboardModel;


class Dashboard extends BaseController
{
    public function index()
    {
        $mostrar = new DashboardModel();
        $data = $mostrar->mostrarUsuarios();        
       // print_r($data);
        $datos = ["usuarios" => $data];
           
        echo view('layout/headerNew');
        echo view('Dashboard/welcome',$datos);
        echo view('layout/footerNew');
        
        
    }


    public function otroIndex()
    {
    
        

        echo view('layout/header');
        echo view('Dashboard/index');
        echo view('layout/footer');
        
        
    }

    public function inicioRegUser(){
        
       
        echo view('layout/headerLogin');
        echo view('Dashboard/content/regisUser');
        echo view('layout/footerLogin');

    }
      

    public function regisRoutes(){
        echo view('layout/header');
        echo view('Dashboard/content/rutasAvila');
        echo view('layout/footer');
    }

    public function infoAvila(){

        $mostrar = new DashboardModel();
        $data = $mostrar->mostrarRutas();
        $datos= ["rutas"=>$data];
        echo view('layout/header');
        echo view('Dashboard/content/infoAvila',$datos);
        echo view('layout/footer');
    }

    public function infoRuta(){
        echo view('layout/header');
        echo view('Dashboard/content/infoRuta');
        echo view('layout/footer');
    }


    public function enviarRuta(){
        $datosRuta=[
            "nombre_ruta"=>$_POST["nombre_ruta"],
            "nivel"=>$_POST["nivel"],
            "descripcion"=>$_POST["descripcion"],
            "img_ruta"=>$_POST["img_ruta"]
        ];
        $agregarRut = new DashboardModel();
        $agregarRut->agregarRuta($datosRuta);
        
    }

    public function login(){
        
        
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');
      
               
        $Usuarios = new DashboardModel();
        $datoUsuario = $Usuarios->sessionLogin(['correo'=> $usuario]);
    
        if($datoUsuario[0]['correo'] == $usuario && password_verify($password,$datoUsuario[0]['password']))
        {
            $data = [
                        "id" => $datoUsuario[0]['id'],
                        "usuario" => $datoUsuario[0]['nombre'],
                        "loggin" => true
                     ];
            $session = session();
            $session->set($data);

         
                     
            return redirect()->to(base_url('/Dashboard'))->with('mensaje','1');
        }else{
            return redirect()->to(base_url('/'))->with('mensaje','1');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'))->with('mensaje','1');
    }



}
