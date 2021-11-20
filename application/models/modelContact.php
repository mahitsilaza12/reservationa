<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelContact extends CI_Model
{
    protected $table = "contact";

    public function __construct(){
        parent::__construct();
        $this->load->model('modelContact');
    }
    public function add($formArray)
    {
      $this->db->insert($this->table, $formArray);
    }
    public function all(){
      return $this->db->get($this->table)->result_array(); //SELECT *FROM
    }
    function delete($idcontact){
      $this->db->where('idcontact', $idcontact);
      $this->db->delete($this->table); //delete from client;

}
//    public function
}