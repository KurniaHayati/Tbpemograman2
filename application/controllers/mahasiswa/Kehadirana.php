<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadirana extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ganjil1819_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil1819"] = $this->ganjil1819_model->getAll();
        $this->load->view("mahasiswa/kehadirana/list", $data);
    }
}
