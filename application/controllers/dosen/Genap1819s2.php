<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Genap1819s2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Genap18192_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["genap1819s2"] = $this->Genap18192_model->getAll();
        $this->load->view("dosen/genap18192/list", $data);
    }

    public function add()
    {
        $genap18192 = $this->Genap18192_model;
        $validation = $this->form_validation;
        $validation->set_rules($genap18192->rules());

        if ($validation->run()) {
            $genap18192->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("dosen/genap18192/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dosen/genap1819s2');
       
        $genap18192 = $this->Genap18192_model;
        $validation = $this->form_validation;
        $validation->set_rules($genap18192->rules());

        if ($validation->run()) {
            $genap18192->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["genap18192"] = $genap18192->getById($id);
        if (!$data["genap18192"]) show_404();
        
        $this->load->view("dosen/genap18192/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Genap18192_model->delete($id)) {
            redirect(site_url('dosen/genap1819s2'));
        }
    }
}
