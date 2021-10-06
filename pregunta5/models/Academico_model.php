<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academico_model extends CI_Model {

	public function __construct(){
		parent::__construct();	
	}
	//realizamos las consultas
	public function docentes()
	{
		$this->load->database();
		$query = $this->db->query('SELECT ci,paterno,materno,nombre,usuario FROM persona INNER JOIN usuario ON persona.ci=usuario.id_persona INNER JOIN rol ON usuario.rol_fk=rol.id_rol WHERE rol.id_rol=1');

		return $query->result();
	}

	public function docente_save($docente){

		//Insertamos los datos a la BASE DE DATOS
		$this->load->database();
		$this->db->insert("persona",$docente);
	}
	public function usuario_save($usuario){

		//Insertamos los datos a la BASE DE DATOS
		$this->load->database();
		$this->db->insert("usuario",$usuario);
	}
	public function borrar_docente($id_docente)
	{
		$this->load->database();
		$this->db->delete('usuario', array('id_persona' => $id_docente));
		$this->db->delete('persona', array('ci' => $id_docente));

	}
	public function editar_docente($id_docente)
	{
		$this->load->database();
		$sql = 'SELECT * FROM persona INNER JOIN usuario ON persona.ci=usuario.id_persona WHERE persona.ci='.$id_docente;
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function actualizar_docente($id,$docente,$usuario)
	{
		$this->load->database();
		$this->Academico_model->borrar_docente($id);
		$this->Academico_model->docente_save($docente);
		$this->Academico_model->usuario_save($usuario);
		
		
	}
	public function actualizar_usuario($usuario)
	{
		$this->load->database();
		$this->load->where('id_persona',$id);
		$this->db->update('usuario', $usuario);
	}


}