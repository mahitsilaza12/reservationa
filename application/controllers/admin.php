<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
		if(!($this->session->has_userdata("state")))
		{
			$this->session->set_flashdata("login" , "Vous devez d'abord vous connecter");
			redirect("/login");
		}
			

		$this->load->view('templetes/headeradmin');
        $this->load->model('ModelWelcome');
		$this->load->library('form_validation');
        $service =$this->ModelWelcome->all();
        $data=array();
        $data['service']=$service;
		$this->load->view('admin/index',$data);
		$this->load->view('templetes/footer');
	}

    function edit($idreserve){
		$this->load->view('templetes/headeradmin');
        $this->load->model('ModelWelcome');
        $service = $this->ModelWelcome->get($idreserve);
        $data=array();
        $data['service']=$service;
        $formArray=array();
        $formArray['approuver']=$this->input->post('approuver');
        $this->ModelWelcome->update($idreserve, $formArray);
        redirect(base_url().'admin/');
    }
    function affichage($idreserve){
		$this->load->view('templetes/headeradmin');
		$this->load->library('form_validation');    
        $this->load->model('ModelWelcome');
        $service = $this->ModelWelcome->get($idreserve);
        $data['service']=$service;
        $this->load->view('admin/affichage',$data);
		$this->load->view('templetes/footer');

    }
    function modifier($idreserve){
		$this->load->view('templetes/headeradmin');
		$this->load->library('form_validation');    
        $this->load->model('ModelWelcome');
        $service = $this->ModelWelcome->get($idreserve);
        $data=array();
        $data['service']=$service;
        $this->form_validation->set_rules('prix','prix','required');
        if($this->form_validation->run() ==false){
            $this->load->view('admin/edit');
        }  
        else{
            $formArray['prix']=$this->input->post('prix');
            $this->ModelWelcome->update($idreserve, $formArray);
            redirect(base_url().'admin/');
        }      
      
    }

    function message(){
        if(!($this->session->has_userdata("state")))
		{
			$this->session->set_flashdata("login" , "Vous devez d'abord vous connecter");
			redirect("/login");
		}
        $this->load->view('templetes/headeradmin');
        $this->load->model('modelContact');
		$this->load->library('form_validation');
        $contact =$this->modelContact->all();
        $data=array();
        $data['contact']=$contact;
		$this->load->view('admin/message',$data);
		$this->load->view('templetes/footer');
    }
    function delete($idcontact){
        $this->load->model('modelContact');
        $this->modelContact->delete($idcontact);
        $this->session->set_flashdata('danger', 'suppression correct');
        redirect(base_url(). 'admin/message');
    }
    function deletR($idreserve){
        $this->load->model('ModelWelcome');
        $this->ModelWelcome->deleteR($idreserve);
        redirect(base_url(). 'admin/');
    
    }
    function new(){
        $this->load->model('ModelWelcome');
        $data['new'] = $this->ModelWelcome->count();
        $this->load->view('template/headeradmin',$data);
		$this->load->view('templetes/footer');

    }
    function login(){
        $this->load->view('login/login');

    }
    public function log_in()
	{
		$this->load->model("modelUser");
		if($this->modelUser->login($this->input->post("mail"),$this->input->post("mdp")))
			{
				$data = array(
					"mail" => $this->modelUser->login($this->input->post("mail") , $this->input->post("mdp"))[0]->type,
					"nom" => $this->input->post("nom"),
					"state" => "logged"
				);
				$this->session->set_userdata($data);
				$this->index();
			}
		else
		{
			$this->session->set_flashdata("login" , "Votre nom d'utilisateur ou mot de passe n'est pas valide");
			$this->login();
		}
	}
    public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('login/login');
	}
    
}

