<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ganjil1819s2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ganjil18192_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil1819s2"] = $this->ganjil18192_model->getAll();
        $this->load->view("admin/ganjil18192/list", $data);
    }

    public function add()
    {
        $ganjil18192 = $this->ganjil18192_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil18192->rules());

        if ($validation->run()) {
            $ganjil18192->save();
            $this->load->view("admin/notifikasi");
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/ganjil18192/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ganjil1819s2');
       
        $ganjil18192 = $this->ganjil18192_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil18192->rules());

        if ($validation->run()) {
            $ganjil18192->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["ganjil18192"] = $ganjil18192->getById($id);
        if (!$data["ganjil18192"]) show_404();
        
        $this->load->view("admin/ganjil18192/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->ganjil18192_model->delete($id)) {
            redirect(site_url('admin/ganjil1819s2'));
        }
    }
}
