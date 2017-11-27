<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller	extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
    }

    function mainPage($location,$data=array()) 
    {
        $this->load->view('include/header',$data);
        $this->load->view($location);
        $this->load->view('include/footer');
    }
}