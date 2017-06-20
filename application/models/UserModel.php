<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModel
 *
 * @author vien34
 */
class UserModel extends CI_Model {
    
     public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        
    }
    
    function getUserValide($data){
        
          $ref = [
            'email' => "vivi",
            'mdp' => 123
        ];
        
        if ($data['email'] == $ref['email'] && $data['mdp'] == $ref['mdp'] ){
              
              $this->session->unset_userdata('some_name');
              $this->session->set_userdata($ref);
              
              redirect('/admin');
          }
        
          
          
    }
    
    
}
