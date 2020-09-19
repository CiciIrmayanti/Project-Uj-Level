<?php 

class Data_order extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('id_level') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
              redirect('auth/login');
        }
    }
    public function index()
    {
        $data['order'] = $this->model_order->tampil_data()->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/data_order', $data);
        $this->load->view('templates_kasir/footer');
    }    

    public function bayar($id_order){
        $where = array('id_order' =>$id_order);
        $data['order'] = $this->model_order->transaksi($where, 'tb_order')->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/transaksi', $data);
        $this->load->view('templates_kasir/footer');
    }


    public function tambah_bayar()
    {
        $id_user = $this->input->post('id_user');
        $id_order = $this->input->post('id_order');
        $tanggal = $this->input->post('tanggal');
        $total_harga = $this->input->post('total_harga');
        $nominal_uang   = $this->input->post('nominal_uang');
        $kembalian      = $this->input->post('kembalian');

        $data = array (
            'id_user' => $id_user,
            'id_order' => $id_order,
            'tanggal' => $tanggal,
            'total_harga' => $total_harga,
            'nominal_uang'  => $nominal_uang,
            'kembalian'     => $kembalian
    );
    $this->model_order->tambah_order($data, 'tb_transaksi');
    redirect('kasir/data_order/index');
    }
}

?>