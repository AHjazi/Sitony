<?php

class M_tambahsparepart extends CI_Model
{

    public function show_data()
    {
        return $this->db->query("SELECT * FROM sparepart s left join satuan sa on s.id_satuan=sa.id_satuan")->result();
    }

    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_sparepart($id)
    {
        return $this->db->get_where('sparepart',['id_sparepart'=> $id])->row_array();
    }

    public function update_data($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}