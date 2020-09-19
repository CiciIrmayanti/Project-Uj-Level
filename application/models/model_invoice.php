<?php

class Model_invoice extends CI_Model{

    public function index()
    {
        $no_meja        = $this->input->post('no_meja');
        $tanggal        = $this->input->post('tanggal');
        $id_user        = $this->input->post('id_user');
        $keterangan     = $this->input->post('keterangan');
        $total_harga    = $this->input->post('total_harga');

        $invoice    = array(
            'no_meja'       => $no_meja,
            'tanggal'       => $tanggal,
            'id_user'       => $id_user,
            'keterangan'    => $keterangan,
            'total_harga'   => $total_harga
        );
        $this->db->insert('tb_order', $invoice);
        $id_order = $this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data = array (
                'id_order'      => $id_order,
                'id_makanan'    => $item['id'],
                'nama_makanan'  => $item['name'],
                'jumlah_pesan'  => $item['qty'],
                'total_pesanan' => $item['price'],
                'total_harga'   => $total_harga
            );
            $this->db->insert('tb_detail_order', $data);
        }
        return TRUE;
    }

    public function tampil_data()
    {
        $result     = $this->db->get('tb_detail_order');
        if($result->num_rows() > 0){
            return $result->result();
        } else {
            return FALSE;
        }
    }

    public function get_invoice()
    {
        $data = $this->db->get('tb_detail_order');
        return $data->result();
    }

    public function count_invoice()
    {
        $data = $this->db->get('tb_detail_order');
        return $data->num_rows();
    }
}