<?php 

class Model_kategori extends CI_Model
{
   //data makanan & minuman -> controller kategori
    public function data_makanan()
    {
       return $this->db->get_where("tb_makanan",array('kategori'=>'makanan'));
    }

    public function data_minuman()
    {
       return $this->db->get_where("tb_makanan",array('kategori'=>'minuman'));
    }
}

?>