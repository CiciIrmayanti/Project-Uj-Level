<?php 

class Dashboard_admin extends CI_Controller{

    //hak akses selain admin tidak bisa masuk
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id_level') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
        }
    }

    //halaman admin
    public function index()
    {
        $data['transaksi'] = $this->model_transaksi->get_transaksi();
        $data['total_transaksi'] = $this->model_makanan->JumlahTransaksi();
        $data['total_order'] = $this->model_makanan->JumlahOrder();
        $data['total_menu'] = $this->model_makanan->JumlahMenu();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_admin/footer');
    }
    
}

?>