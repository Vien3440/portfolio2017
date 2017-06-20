<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author vien34
 */
class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->model('AboutModel', 'aboutM');
        $this->load->model('SkillModel', 'skillsM');
        $this->load->model('CourseModel', 'courM');
        $this->load->model('WorkModel', 'workM');
        $this->load->model('ProjetModel', 'projM');
    }

    /**
     * return this landingPage (home)
     */
    public function index() {



        if (empty($this->session->userdata('email')) == true) {
            redirect('login');
        } else {
            $this->load->view('admin/template_admin/head');
            $this->load->view('admin/template_admin/nav');
            $this->load->view('admin/home_admin');
            $this->load->view('admin/template_admin/footer');
        }

//    
    }

    public function getAbouts() {

        if (empty($this->session->userdata('email')) == true) {
            redirect('login');
        } else {
            $this->load->view('admin/template_admin/head');
            $this->load->view('admin/template_admin/nav');
            $this->load->view('admin/about/homeAbout_admin', array(
                "abouts" => $this->aboutM->getAll(),
            ));
            $this->load->view('admin/template_admin/footer');
        }
    }

    public function addAbout() {
        
        if (empty($this->session->userdata('email')) == true) {
            redirect('login');
        } else {
            //chargement de la librairie pour la validation du formulaire
            $this->load->library('form_validation');
            //chargement du helper form
            $this->load->helper('form');

            //create Obj about
            $data = [
                'text' => $this->input->post('text')
            ];
            $this->aboutM->create($data);
            /// Return on view homeAbout
            $this->getAbouts();
        }
    }

    public function removeAbout($int) {
        
        if (empty($this->session->userdata('email')) == true) {
            redirect('login');
        } else {
            $this->aboutM->delete($int);
            $this->getAbouts();
        }
    }

}
