<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ganjil1920s2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ganjil19202_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["ganjil1920s2"] = $this->ganjil19202_model->getAll();
        $this->load->view("admin/ganjil19202/list", $data);
    }

    public function add()
    {
        $ganjil19202 = $this->ganjil19202_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil19202->rules());

        if ($validation->run()) {
            $ganjil19202->save();
            $this->load->view("admin/notifikasi");
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/ganjil19202/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/ganjil1920s2');
       
        $ganjil19202 = $this->ganjil19202_model;
        $validation = $this->form_validation;
        $validation->set_rules($ganjil19202->rules());

        if ($validation->run()) {
            $ganjil19202->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["ganjil19202"] = $ganjil19202->getById($id);
        if (!$data["ganjil19202"]) show_404();
        
        $this->load->view("admin/ganjil19202/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->ganjil19202_model->delete($id)) {
            redirect(site_url('admin/ganjil1920s2'));
        }
    }
}
