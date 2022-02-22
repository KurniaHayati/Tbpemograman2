<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadirand extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwalaja_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jadwalaja"] = $this->jadwalaja_model->getAll();
        $this->load->view("mahasiswa/Kehadirand/list", $data);
    }
}
