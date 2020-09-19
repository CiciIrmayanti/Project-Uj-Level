<?php 

class Model_makanan extends CI_Model{

    //function tampil data di ambil dari dashboard
    public function tampil_data()
    {
        return $this->db->get('tb_makanan'); //get database
    }

    public function tambah_makanan($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function edit_makanan($where,$table)
    {
       return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    //untuk mencari id ketika kita klik
    public function find($id_makanan)
    {
        $result = $this->db->where('id_makanan', $id_makanan)
                            ->limit(1)
                            ->get('tb_makanan');
        if($result->num_rows() > 0)
        {
            return $result->row();
        } else {
            return array();
        }
    }

    //hitungjumlah order menu transaksi
    public function JumlahMenu()
    {
        $query = $this->db->get('tb_makanan');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
            return array();
        }
    }

    public function JumlahOrder()
    {
        $query = $this->db->get('tb_order');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
            return array();
        }
    }

    public function JumlahTransaksi()
    {
        $query = $this->db->get('tb_transaksi');
        if($query->num_rows()>0)
        {
            return $query->num_rows();
        } else {
            return array();
        }
    }
    
    public function detail_order($id_makanan)
    {
        $result = $this->db->where('id_makanan',$id_makanan)->get('tb_makanan');
        if($result->num_rows() > 0)
        {
            return $result->result();
        } else {
            return false;
        }
    }
}
