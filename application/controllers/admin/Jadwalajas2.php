<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class jadwalajas2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("jadwalaja2_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jadwalajas2"] = $this->jadwalaja2_model->getAll();
        $this->load->view("admin/jadwalaja2/list", $data);
    }

    public function add()
    {
        $jadwalaja2 = $this->jadwalaja2_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalaja2->rules());

        if ($validation->run()) {
            $jadwalaja2->save();
            $this->load->view("admin/notifikasi");
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/jadwalaja2/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/jadwalajas2');
       
        $jadwalaja2 = $this->jadwalaja2_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalaja2->rules());

        if ($validation->run()) {
            $jadwalaja2->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jadwalaja2"] = $jadwalaja2->getById($id);
        if (!$data["jadwalaja2"]) show_404();
        
        $this->load->view("admin/jadwalaja2/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->jadwalaja2_model->delete($id)) {
            redirect(site_url('admin/jadwalajas2'));
        }
    }
}
