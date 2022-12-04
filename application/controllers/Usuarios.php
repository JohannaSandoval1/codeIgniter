<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
   
   function __construct(){
       parent::__construct();
       $this->load ->helper('form');
       $this->load ->model('usuarios_model');
   }

   function index(){
      
    $data['usuarios'] = $this -> usuarios_model -> obtenerUsuarios();
    $this->load->view('usuarios/usuarios',$data);
   }
  
    

    public function add_new() {
        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $clave = $_POST['clave'];
            $this->usuarios_model ->crearUsuario($nombre,$clave );
            $data['usuarios'] = $this -> usuarios_model -> obtenerUsuarios();
            $this->load->view('usuarios/usuarios',$data);
        }
       
        $this->load->view('usuarios/usuarios_add');

      

    }

    function recibirDatos(){

        $data = array(
                 'nombre'=> $this -> input ->post('nombre'),
                 'clave'=> $this -> input ->post('clave')
            );

            $this -> usuarios_model -> crearUsuario($data);
            $this -> load -> view('usuarios/headers');
            $this -> load -> view('usuarios/bievenido');


    }

    public function delete() {

       
        $id=$this->uri->segment('3');
        $this->usuarios_model ->eliminarUsuario($id);
        $data['usuarios'] = $this -> usuarios_model -> obtenerUsuarios();
        $this->load->view('usuarios/usuarios',$data);
    }
    
    public function edit() {
       
        $name=$this->uri->segment('3');
		$id=$this->uri->segment('4');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
            $id= $this->security->xss_clean( $this->input->post('id') );
            $nombre= $this->security->xss_clean( $this->input->post('nombre') );
            $this->usuarios_model->actualizar_usuario($id,$nombre);
            $data['usuarios'] = $this -> usuarios_model -> obtenerUsuarios();
            $this->load->view('usuarios/usuarios',$data);
        }


        $data['id'] = $id;
		$data['nombre'] = $name;

		$this->load->view('usuarios/usuarios_edit', $data);
    }

    
}