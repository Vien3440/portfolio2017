<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AboutModel
 *
 * @author vien34
 */
class AboutModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    //put your code here
    public function create($data) {
        
        return $this->db->insert('about', $data);
    }

    public function delete($id) {
        $this->db->where('id',$id);
        return $this->db->delete('about');
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM about");
        return $query->result_array();
    }

    public function update() {
        
    }

}
