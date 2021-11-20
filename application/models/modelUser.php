<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelUser extends CI_Model
{
    protected $table = "user";


    function all(){
        return $this->db->get($this->table)->result_array(); //SELECT *FROM
    }
    public function login($mail , $mdp)
    {
        return $this->db->select()
                        ->where("mail" , $mail)
                        ->where("mdp" , $mdp)
                        ->get($this->table)
                        ->result();
    }

    public function add($nom , $mdp, $type)
    {
        $this->db->set([
            "nom" => $nom,
            "mdp" => $mdp,
            "type" => $type
        ]);
        return $this->db->insert($this->table) ? true : false;
    }
    public function delete($id)
    {
        return $this->db->where("id" , $id)
                        ->delete($this->table) ? true : false;
    }
    public function update($id , $data)
    {
        $this->db->set([
            "nom" => $data["nom"],
            "mdp" => $data["mdp"]
            // "type" => $data["type"]
        ]);

        return $this->db->where("id",$id)
                        ->update($this->table) ? true : false;
    }

    public function get($id)
    {
        $this->db->where('id', $id);
       return $this->db->get($this->table)->row_array();
    }


}

   