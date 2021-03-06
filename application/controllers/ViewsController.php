<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ViewsController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('AboutModel','aboutM');
        $this->load->model('SkillModel','skillsM');
        $this->load->model('CourseModel','courM');
        $this->load->model('WorkModel','workM');
        $this->load->model('ProjetModel','projM');
    }

    /**
     * return this landingPage (home)
     */
    public function index() {

        $this->load->view('user/userTemplate/header');
        $this->load->view('user/userTemplate/nav');
        $this->load->view('user/landingPage', array(
            "abouts" => $this->aboutM->getAll(),
            "skills" => $this->skillsM->getAll(),
            "courses" => $this->courM->getAll(),
            "works" => $this->workM->getAll(),
            "projets" => $this->projM->getAll(),
            
        ));
        $this->load->view('user/userTemplate/footer');
    }

}
