<?php 

class Model_transaksi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_transaksi');
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function get_transaksi(){
        $data = $this->db->get('tb_transaksi');
        return $data->result();
    }

    public function count_transaksi(){
        $data = $this->db->get('tb_transaksi');
        return $data->num_rows();
    }
    
    //model edit
    public function edit_transaksi($where,$table)
    {
       return $this->db->get_where($table,$where);
    }

    //model update
    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function struk($where,$table)
    {
       return $this->db->get_where($table,$where);
    }



    
}