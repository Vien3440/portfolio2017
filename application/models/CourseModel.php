<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CourseModel
 *
 * @author vien34
 */
class CourseModel extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    //put your code here
    public function create() {
        
    }

    public function delete() {
        
    }

    public function getAll() {
        $query = $this->db->query("SELECT * FROM formation");
        return $query->result_array();
    }

    public function update() {
        
    }

}
