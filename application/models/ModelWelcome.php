<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelWelcome extends CI_Model
{
    protected $table = "reserve";

    public function __construct(){
        parent::__construct();
        $this->load->model('ModelWelcome');
    }
    public function add($formArray)
    {
      $this->db->insert($this->table, $formArray);
    }

    public function all(){
      return $this->db->get($this->table)->result_array();
    }
    // UPDATE `reserve` SET `approuver` = '1' WHERE `reserve`.`idreserve` = 16;
    function getApprouver($idreserve){
      $this->db->where('idreserve', $idreserve);
      $this->db->update($this->table,'approuver');
    }
    function get($idreserve){
      $this->db->where('idreserve', $idreserve);
      return $this->db->get($this->table)->row_array();
    }
    function update($idreserve,$formArray){
      $this->db->where('idreserve', $idreserve);
      $this->db->update($this->table, $formArray);
    }
    function deleteR($idreserve){
      $this->db->where('idreserve', $idreserve);
      $this->db->delete($this->table); //delete from client;

}
    public function count(){
      $query = $this->db->query('SELECT COUNT(idreserve) AS new FROM reserve WHERE prix=0 "')->row_object();
      return $query->new;
    }
}