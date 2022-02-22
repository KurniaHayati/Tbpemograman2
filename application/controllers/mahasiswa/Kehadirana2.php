<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadirana2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ganjil18192_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil18192"] = $this->ganjil18192_model->getAll();
        $this->load->view("mahasiswa/Kehadirana2/list", $data);
    }
}
