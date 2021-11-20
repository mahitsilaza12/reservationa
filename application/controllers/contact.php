<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {

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

		$this->load->view('contact/index');
		
		$this->load->view('templetes/footer');
	}

	function insertC(){
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->model('modelContact');
		$this->form_validation->set_rules('nomC','nomC','required');
		$this->form_validation->set_rules('email','mail','required');
		$this->form_validation->set_rules('message','message','required');
		if($this->form_validation->run()==false){
			$this->load->view('contact');
		}else{
			$formArray = array();
			$formArray['nomC'] =$this->input->post('nomC');
			$formArray['email'] = $this->input->post('email');
			$formArray['sugestion'] = $this->input->post('sugestion');
			$formArray['message'] = $this->input->post('message');
			$this->modelContact->add($formArray);
			$this->session->set_flashdata('success','votre message à été envoyer avec success!!! </br> merci de votre confiance ');
			 redirect(base_url()."contact/success");
			}

	}
	function success()
	{
		
		$this->load->view('templetes/header');

		$this->load->view('contact/success');

		
		$this->load->view('templetes/footer');
	}
}
