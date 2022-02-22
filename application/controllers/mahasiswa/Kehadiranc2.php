<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiranc2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("genap18192_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["genap18192"] = $this->genap18192_model->getAll();
        $this->load->view("mahasiswa/Kehadiranc2/list", $data);
    }
}
