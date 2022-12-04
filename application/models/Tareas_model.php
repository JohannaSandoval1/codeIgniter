<?php

class Tareas_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function obtenerTareas()
    {
       $query =$this->db->select('*')->get('tarea');
        
       return $query->result();
       
    }
  
    public function actualizar_tarea($id,$name) {
		$d_t_d = array(
			'nombre' => $name
		);
		$this->db->where('usuario', $id)->update('nombre', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'usuario actualizado');
	}
   
    public function crearTarea($titulo, $descripcion)
    {
        $this->db->insert('tarea',array('titulo'=>$titulo, 
                          'descripcion' => $descripcion));
        
    }

    public function eliminarTareas($id)
    {
      
        $q=$this->db->select('*')->from('tarea')->where('id', $id)->limit(1)->get();
		if( $q->num_rows() < 1 ) {
			redirect( base_url('/') );
		}
		$this->db->delete('tarea', array('id' => $id));
        

    }

    

}