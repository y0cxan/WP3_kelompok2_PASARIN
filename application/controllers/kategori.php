<?php

class Kategori extends CI_Controller{
    public function sayur()
    {
        $data['sayur'] = $this->model_kategori->data_sayur()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sayur', $data);
        $this->load->view('templates/footer');
    }

    public function daging()
    {
        $data['daging'] = $this->model_kategori->data_daging()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('daging', $data);
        $this->load->view('templates/footer');
    }
    
    
}