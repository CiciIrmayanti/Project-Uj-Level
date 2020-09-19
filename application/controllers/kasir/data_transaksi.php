<?php 

class Data_transaksi extends CI_Controller{

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
        $data['transaksi'] = $this->model_transaksi->tampil_data()->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/data_transaksi', $data);
        $this->load->view('templates_kasir/footer');
    }   

    public function hapus($id_transaksi)
    {
        $where = array('id_transaksi' => $id_transaksi);
        $this->model_transaksi->hapus_data($where, 'tb_transaksi');
        redirect('kasir/data_transaksi/index');
    }

    // untuk edit data transaksi
    public function edit($id_transaksi){
        $where = array('id_transaksi' =>$id_transaksi);
        $data['transaksi'] = $this->model_transaksi->edit_transaksi($where, 'tb_transaksi')->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/edit_transaksi', $data);
        $this->load->view('templates_kasir/footer');
    }

    //update data
    public function update()
    {
        $id_transaksi   = $this->input->post('id_transaksi');
        $id_user        = $this->input->post('id_user');
        $id_order       = $this->input->post('id_order');
        $tanggal        = $this->input->post('tanggal');
        $total_harga    = $this->input->post('total_harga');
        $nominal_uang   = $this->input->post('nominal_uang');
        $kembalian      = $this->input->post('kembalian');

        $data = array(
            'id_user'       =>$id_user,
            'id_order'      => $id_order,
            'tanggal'       => $tanggal,
            'total_harga'   => $total_harga,
            'nominal_uang'  => $nominal_uang,
            'kembalian'     => $kembalian
        );
        $where = array(
            'id_transaksi' => $id_transaksi
        );
        $this->model_makanan->update_data($where,$data, 'tb_transaksi');
        redirect('kasir/data_transaksi/index');
    }

    public function struk($id_transaksi)
    {
        $where = array('id_transaksi' =>$id_transaksi);
        $data['transaksi'] = $this->model_transaksi->struk($where, 'tb_transaksi')->result();
        $this->load->view('templates_kasir/header');
        $this->load->view('templates_kasir/sidebar');
        $this->load->view('kasir/struk', $data);
        $this->load->view('templates_kasir/footer');
    }
}
?>