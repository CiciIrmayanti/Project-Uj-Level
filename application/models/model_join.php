<?php 
class Model_join extends CI_Model
{
    public function tampil_data()
    {
        $this->db->order_by('id_order', 'ASC');
        return $this->db->form('tb_order')
            ->join('id_order', 'id_order.id_order=tb_order.id_order')
            ->get()
            ->result();
    }

}