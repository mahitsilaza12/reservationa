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
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();		
	}
	public function index()
	{
		
		$this->load->view('templetes/header');

		$this->load->view('welcome_message');
		
		$this->load->view('templetes/footer');
	}


	function  insertion(){
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('ModelWelcome');
		$this->form_validation->set_rules('nomT','nomT','required');
		$this->form_validation->set_rules('email','mail','required');
		$this->form_validation->set_rules('phoneT','phoneT','required');
		$this->form_validation->set_rules('nomE','nomE','required');
		$this->form_validation->set_rules('ramassage','ramassage','required');
		$this->form_validation->set_rules('remisage','remisage','required');
		$this->form_validation->set_rules('ecole','ecole','required');
		$this->form_validation->set_rules('class','class','required');
		$this->form_validation->set_rules('axe','axe','required');
		$this->form_validation->set_rules('dateR','dateR','required');
		if($this->form_validation->run()==false){
			$this->load->view('welcome_message');
		}else{
			$formArray = array();
			$formArray['nomT'] =$this->input->post('nomT');
			$formArray['prenomT'] =$this->input->post('prenomT');
			$formArray['email'] = $this->input->post('email');
			$formArray['phoneT'] = $this->input->post('phoneT');
			$formArray['nomE'] = $this->input->post('nomE');
			$formArray['prenomE'] = $this->input->post('prenomE');
			$formArray['ramassage'] = $this->input->post('ramassage');
			$formArray['remisage']=$this->input->post('remisage');
			$formArray['ecole']=$this->input->post('ecole');
			$formArray['class']=$this->input->post('class');
			$formArray['axe']=$this->input->post('axe');
			$formArray['dateR']=$this->input->post('dateR');
			// $formArray['approver']=$this->input->post('approver');
		$this->ModelWelcome->add($formArray);
		$this->session->set_flashdata('success','votre résérvation à été enregistreer avec succée <br>
		le responsable vont rappel quelque minute ');
		 redirect(base_url()."welcome/success");
		}

	}
	 function success()
	{
		
		$this->load->view('templetes/header');

		$this->load->view('templetes/success');

		
		$this->load->view('templetes/footer');
	}
}
