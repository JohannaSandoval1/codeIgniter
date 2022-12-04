<?php

class Usuarios_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function obtenerUsuarios()
    {
       $query =$this->db->select('*')->get('usuario');
        
       return $query->result();
       
    }
  
    public function actualizar_usuario($id,$name) {
		$d_t_d = array(
			'nombre' => $name
		);
		$this->db->where('usuario', $id)->update('nombre', $d_t_d);
		$this->session->set_flashdata('msg_alert', 'usuario actualizado');
	}
   
    public function crearUsuario($nombre, $clave)
    {
        $this->db->insert('usuario',array('nombre'=>$nombre, 
                          'clave' => $clave));
       
    }

    public function eliminarUsuario($id)
    {
      
        $q=$this->db->select('*')->from('usuario')->where('id', $id)->limit(1)->get();
		if( $q->num_rows() < 1 ) {
			redirect( base_url('/') );
		}
		$this->db->delete('usuario', array('id' => $id));
       

    }
    

}