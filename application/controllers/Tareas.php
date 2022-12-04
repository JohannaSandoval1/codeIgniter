<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tareas extends CI_Controller {
   
   function __construct(){
       parent::__construct();
       $this->load ->helper('form');
       $this->load ->model('tareas_model');
   }


   function index(){
      
    $data['tareas'] = $this -> tareas_model -> obtenerTareas();
    $this->load->view('tareas/tareas',$data);
   }
   
    public function add_new() {
        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $this->tareas_model ->crearTarea($titulo,$descripcion );
            $data['tareas'] = $this -> tareas_model -> obtenerTareas();
            $this->load->view('tareas/tareas',$data);
        }
    
        $this->load->view('tareas/tareas_add');

    

    }

    public function delete() {

    
        $id=$this->uri->segment('3');
        $this->tareas_model ->eliminarTareas($id);
        $data['tareas'] = $this -> tareas_model -> obtenerTareas();
        $this->load->view('tareas/tareas',$data);
    }

    public function edit() {
    
        $name=$this->uri->segment('3');
        $id=$this->uri->segment('4');

        if( $_SERVER['REQUEST_METHOD'] == 'POST') {
            $id= $this->security->xss_clean( $this->input->post('id') );
            $titulo= $this->security->xss_clean( $this->input->post('titulo') );
            $this->tareas_model->actualizar_tareas($id,$nombre);
            $data['tareas'] = $this -> tareas_model -> obtenerTareas();
            $this->load->view('tareas/tareas',$data);
        }


        $data['id'] = $id;
        $data['nombre'] = $name;

        $this->load->view('tareas/tareas_edit', $data);
    }
    

    
}