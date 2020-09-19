<?php 

class Invoice extends  CI_Controller{

    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/invoice', $data);
        $this->load->view('templates_kasir/footer');
    }
}