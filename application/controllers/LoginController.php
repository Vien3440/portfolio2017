<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author vien34
 */
class LoginController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->model('UserModel', 'userM');
    }

    public function getFormLogin() {

        $this->session->unset_userdata('email','mdp');

        //chargement de la librairie pour la validation du formulaire
        $this->load->library('form_validation');
        //chargement du helper form
        $this->load->helper('form');


        $data = [
            'email' => $this->input->post('email'),
            'mdp' => $this->input->post('mdp')
        ];

        $this->userM->getUserValide($data);


        $this->load->view('user/userTemplate/header');
        $this->load->view('user/userTemplate/nav');
        $this->load->view('user/formLogin');
        $this->load->view('user/userTemplate/footer');
    }

}
