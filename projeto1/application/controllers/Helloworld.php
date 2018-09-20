<?php
defined('BASEPATH') OR  exit('No direct script acces allowed');

class Helloworld extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('helloworld_model');
    }

    public function index(){
        $data['result'] = $this->helloworld_model->getData();
        $this->load->view('helloworld_view', $data);
    }
}