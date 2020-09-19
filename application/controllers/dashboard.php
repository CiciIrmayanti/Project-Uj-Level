<?php 

class Dashboard extends CI_Controller{

        //tambah ke keranjang
    public function tambah_ke_keranjang($id_makanan)
    {
        //buat variable makanan & fungsi find untuk mencari id makanan ketika diklik 
        $makanan = $this->model_makanan->find($id_makanan);
        //data array ini kita ambil di codeigniter->cart(untuk insert data ke dalam cart)
        $data = array(
            'id'      => $makanan->id_makanan,
            'qty'     => 1,
            'price'   => $makanan->harga,
            'name'    => $makanan->nama_makanan
    );
    
    $this->cart->insert($data);
    redirect('welcome');
    }

    //detail keranjang
    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    //hapus keranjang
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('welcome');
    }

    //halaman pembayaran
    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    //
    public function proses_pesanan(){

        $is_processed = $this->model_invoice->index();
            if($is_processed){
                $this->cart->destroy();
                $this->load->view('templates/header');
                $this->load->view('templates/sidebar');
                $this->load->view('proses_pesanan');
                $this->load->view('templates/footer');
            } else {
                echo "Maaf, pesanan anda gagal";
            }
    }

    //proses simpan
    public function simpan_order(){
            $no_meja        = $this->input->post('no_meja');
            $tanggal        = $this->input->post('tanggal');
            $id_user        = $this->input->post('id_user');
            $keterangan     = $this->input->post('keterangan');
            $total_harga    = $this->input->post('total_harga');

            $data = array (
                'no_meja'       => $no_meja,
                'tanggal'       => $tanggal,
                'id_user'       => $id_user,
                'keterangan'    => $keterangan,
                'total_harga'   => $total_harga,
        );
        $this->model_order->tambah_order($data, 'tb_order');
        redirect('dashboard/proses_pesanan');
        }

    public function detail_order($id_makanan)
    {
        $data['makanan'] = $this->model_makanan->detail_order($id_makanan);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_order',$data);
        $this->load->view('templates/footer');
    }

    
    public function cetak()
    {
        ob_start();
        $data['c_transaksi'] = $this->model_transaksi->count_transaksi();
        $data['transaksi'] = $this->model_transaksi->get_transaksi();
        $this->load->view('admin/preview', $data);
        $html = ob_get_contents();
                ob_end_clean();

        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data_Transaksi_'.date('d-m-Y'). '.pdf', 'D');
    }

    public function cetak_invoice()
    {
        ob_start();
        $data['c_invoice'] = $this->model_invoice->count_invoice();
        $data['invoice'] = $this->model_invoice->get_invoice();
        $this->load->view('kasir/preview_invoice', $data);
        $html = ob_get_contents();
                ob_end_clean();

        require './assets/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P','A4','en');
        $pdf->WriteHTML($html);
        $pdf->Output('Struk_'.date('d-m-Y'). '.pdf', 'D');
    }
}

?>