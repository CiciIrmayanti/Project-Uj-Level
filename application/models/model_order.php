<?php 

class Model_order extends CI_Model{
     public function tambah_order($data,$table)
    {
        $this->db->insert($table,$data);
    }
    public function tampil_data()
    {
        return $this->db->get('tb_order');
    }

    public function transaksi($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    
    
    
    
}