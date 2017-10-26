<?php if ( ! defined('BASEPATH')) exit('no direct script basic allowed');

class Controlador extends CI_Controller {
	function __construc(){
		parent::__construc();
		$this->load->helper('url'); 
		$this->load->helper('form');
	}

	function index(){ 
		$this->load-> view('vista/cabecera');
		$this->load-> view('vista/vista_principal');
	}
	function boton1(){
		$this->load-> view('vista/catalogo');
		}
	
}
?>
