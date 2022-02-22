<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiranb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ganjil1920_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil1920"] = $this->ganjil1920_model->getAll();
        $this->load->view("mahasiswa/Kehadiranb/list", $data);
    }
}
