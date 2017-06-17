<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WorkModel
 *
 * @author vien34
 */
class WorkModel extends CI_Model{
    //put your code here
    
    public function create() {
        
    }

    public function delete() {
        
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM experience");
        return $query->result_array();
    }

    public function update() {
        
    }

}
