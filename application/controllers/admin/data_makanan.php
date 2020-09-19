<?php 

class Data_makanan extends CI_Controller{

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

    //halaman data makanan admin
    public function index()
    {
        
        $data['makanan'] = $this->model_makanan->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_makanan', $data);
        $this->load->view('templates_admin/footer');
    }

    //untuk menambah data makanan
    public function tambah_aksi()
    {
        $nama_makanan = $this->input->post('nama_makanan');
        $harga = $this->input->post('harga');
        $status_makanan = $this->input->post('status_makanan');
        $kategori = $this->input->post('kategori');

        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['file_name'] = url_title($this->input->post('gambar'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $data = $this->upload->data();
        
        $data = array (
            'nama_makanan'      => $nama_makanan,
            'harga'             => $harga,
            'status_makanan'    => $status_makanan,
            'kategori'          => $kategori,
            'gambar'            => $data['file_name']
    );
    $this->model_makanan->tambah_makanan($data, 'tb_makanan');
    redirect('admin/data_makanan/index');
    }

    
    // untuk edit data makanan
    public function edit($id_makanan){
        $where = array('id_makanan' =>$id_makanan);
        $data['makanan'] = $this->model_makanan->edit_makanan($where, 'tb_makanan')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_makanan', $data);
        $this->load->view('templates_admin/footer');
    }

    //update data
    public function update()
    {
        $id_makanan = $this->input->post('id_makanan');
        $nama_makanan = $this->input->post('nama_makanan');
        $harga = $this->input->post('harga');
        $status_makanan = $this->input->post('status_makanan');
        $kategori = $this->input->post('kategori');

        $data = array(
            'nama_makanan' =>$nama_makanan,
            'harga' => $harga,
            'status_makanan' => $status_makanan,
            'kategori' => $kategori
        );
        $where = array(
            'id_makanan' => $id_makanan
        );
        $this->model_makanan->update_data($where,$data, 'tb_makanan');
        redirect('admin/data_makanan/index');
    }

    public function hapus($id_makanan)
    {
        $where = array('id_makanan' => $id_makanan);
        $this->model_makanan->hapus_data($where, 'tb_makanan');
        redirect('admin/data_makanan/index');
    }
}


?>