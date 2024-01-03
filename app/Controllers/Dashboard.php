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
           
        echo view('layout/header');
        echo view('Dashboard/welcome',$datos);
        echo view('layout/footer');
        
        
    }

    public function inicioRegUser(){
        $mostrar = new DashboardModel();
        $data = $mostrar->mostrarRutas();
        $datos= ["rutas"=>$data];

        echo view('layout/header');
        echo view('Dashboard/content/regisUser',$datos);
        echo view('layout/footer');

    }
      
    public function enviarUsuario(){

        $datosUsuarios = [
           "nombre" => $_POST["nombre"],
           "apellido" => $_POST["apellido"],
           "cedula" => $_POST["cedula"],
           "telefono" => $_POST["telefono"],
           "correo" => $_POST["correo"],
           "edad" => $_POST["edad"],
           "sexo" => $_POST["sexo"],
           "estado" =>"1",
           "id_tipo_usuario" => $_POST["tipoUsuario"],
           "id_rutaInicio"=>$_POST["rutaIni"],
           "id_rutaDestino"=>$_POST["rutaDes"],
           "id_reporte"=>"1"
           
       ];
       $agregar = new DashboardModel();
       $agregar->agregarUsuarios($datosUsuarios);
       
       
      
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




}
