<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadirand2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwalaja2_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jadwalaja2"] = $this->jadwalaja2_model->getAll();
        $this->load->view("mahasiswa/Kehadirand2/list", $data);
    }
}
