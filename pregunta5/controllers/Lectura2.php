<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectura2 extends CI_Controller {

	public function index()
	{
		$this->load->model("Academico_model");
		$filas = $this->Academico_model->docentes();
		// $data['nombre']='moises';
		// $data['apellido']='silva';
		$data['docentes']=$filas;
		
		$this->load->view('myviewLectura', $data);
	}

	// Adicionar registro
	public function save(){
		
		//print_r($_POST);
		//tabla persona
		$this->load->model("Academico_model");
		$docente["ci"] = $this->input->post("ci");
		$docente["nombre"] = $this->input->post("nombre");
		$docente["paterno"] = $this->input->post("paterno");
		$docente["materno"] = $this->input->post("materno");
		$docente["f_nacimiento"] = $this->input->post("f_nacimiento");
		$docente["departamento_fk"] = $this->input->post("dpto");
		print_r($docente);
		$this->Academico_model->docente_save($docente);
		//tabla usuario
		$usuario["usuario"] = $this->input->post("usuario");
		$usuario["password"] = $this->input->post("password");
		$usuario["id_persona"] = $this->input->post("ci");
		$usuario["rol_fk"] = '1';
		// llamamos el modelo
		$this->Academico_model->usuario_save($usuario);
		//alerta
		$this->session->set_flashdata('success','Nuevo Docente registrado');
		//redireccionando
		redirect(base_url("index.php/Lectura2"));
	}
	public function borrar(){

		$this->load->model("Academico_model");
		$id_docente = $this->input->get("id");
		//print_r($id);
		$this->Academico_model->borrar_docente($id_docente);
		//alerta
		$this->session->set_flashdata('error','Registro de docente eliminado');
		redirect(base_url("index.php/Lectura2"));
	}

	public function editar(){
		$this->load->model("Academico_model");

		$id_docente = $this->input->get("id");
		$filas = $this->Academico_model->editar_docente($id_docente);
		// $data['nombre']='moises';
		// $data['apellido']='silva';
		$data['docente']=$filas;
		// print_r($filas);
		$this->load->view('editar', $data);
		
	}
	public function actualizar(){
		
		//print_r($_POST);
		//tabla persona
		$this->load->model("Academico_model");
		$docente["ci"] = $this->input->post("ci");
		$docente["nombre"] = $this->input->post("nombre");
		$docente["paterno"] = $this->input->post("paterno");
		$docente["materno"] = $this->input->post("materno");
		$docente["f_nacimiento"] = $this->input->post("f_nacimiento");
		$docente["departamento_fk"] = $this->input->post("dpto");

		//tabla usuario
		$usuario["usuario"] = $this->input->post("usuario");
		$usuario["password"] = $this->input->post("password");
		$usuario["id_persona"] = $this->input->post("ci");
		$usuario["rol_fk"] = '1';
		print_r($usuario);
		$id=$this->input->post("ci");

		$this->Academico_model->actualizar_docente($id,$docente,$usuario);
		//alerta
		$this->session->set_flashdata('success','Datos del Docente actualizado');
		//redireccionando
		redirect(base_url("index.php/Lectura2"));
	}
}