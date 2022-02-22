<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kehadiranb2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ganjil19202_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil19202"] = $this->ganjil19202_model->getAll();
        $this->load->view("mahasiswa/Kehadiranb2/list", $data);
    }
}
