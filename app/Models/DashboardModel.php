<?php namespace App\Models;
use CodeIgniter\Model;

class DashboardModel extends Model{



    //***************************** CRUD DE USUARIOS ***************
    // public function mostrarUsuarios(){
    //     $sql = $this->db->query('SELECT id,nombre, apellido,telefono,correo FROM persons');
    //     return $sql->getResult();
    // }

    public function mostrarUsuarios(){
        $sql = $this->db->query('SELECT personas.id,personas.nombre,personas.apellido,personas.telefono,personas.correo,ruta.nombre_ruta,ruta.nombre_ruta AS rutaDestino,reporte.fecha,programar_ruta.estado
        FROM personas
        INNER JOIN programar_ruta
        ON personas.id=programar_ruta.id_personas
        INNER JOIN ruta
        ON ruta.id = programar_ruta.id_rutaInicio
        INNER JOIN reporte
        ON reporte.id = programar_ruta.id_reporte');
        return $sql->getResult();
    }

    public function modificarUsuarios(){

    }
    public function agregarUsuarios($usuarios){
        
        $sql = $this->db->table('persons');
        $sql->insert($usuarios);
        return $this->db->insertID();
        //falta redireccionar al formulario una vez que se inserte el usuario
    }

    public function eliminarUsuarios(){
        
    }




    // **********************CRUD DE RUTAS ****************************

    public function agregarRuta($rutas){
        $sql = $this->db->table('ruta');
        $sql->insert($rutas);
        return $this->db->insertID();
        //falta redireccionar al formulario una vez que se inserte el usuario
    }

    public function mostrarRutas(){
        $sql = $this->db->query('SELECT id,nombre_ruta,nivel,descripcion,img_ruta FROM ruta');
        return $sql->getResult();
    }
    public function modificarRutas(){

    }

    public function eliminarRutas(){
        
    }



//****************** CRUD TIPO USUARIO ************************/

        // public function agregarTipoUsuario($tipoUsuario){

        //     $sql = $this->db->table('tipousuario');
        // $sql->insert($tipoUsuario);
        // return $this->db->insertID();
        // }


/*************************** CRUD FECHA **********************/
public function agregaFecha($fecha){
    $sql = $this->db->table('reporte');
    $sql->insert($fecha);
    return $this->getResult();
    // falta retornar al formulario

} 
}