<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	/*Creamos el controlador para "MyViews" */
	public function index2()
	{
		$this->load->view('myview');
	}
	/* Probamos con: http://localhost:88/code/index.php/welcome/index2*/
}
