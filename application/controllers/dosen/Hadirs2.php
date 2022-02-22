<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hadirs2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Jadwalaja2_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $id = $this->session->userdata("nama");
        $data["jadwalajas2"] = $this->Jadwalaja2_model->getByNik($id);
        $this->load->view("dosen/jadwalaja2/list", $data);
    }

    public function add()
    {
        $jadwalaja2 = $this->Jadwalaja2_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalaja2->rules());

        if ($validation->run()) {
            $jadwalaja2->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("dosen/jadwalaja2/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('dosen/jadwalajas2');
       
        $jadwalaja2 = $this->Jadwalaja2_model;
        $validation = $this->form_validation;
        $validation->set_rules($jadwalaja2->rules());

        if ($validation->run()) {
            $jadwalaja2->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jadwalaja2"] = $jadwalaja2->getById($id);
        if (!$data["jadwalaja2"]) show_404();
        
        $this->load->view("dosen/jadwalaja2/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Jadwalaja2_model->delete($id)) {
            redirect(site_url('dosen/jadwalajas2'));
        }
    }
}
