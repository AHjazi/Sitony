<?php

class M_tambahkantor extends CI_Model
{

    public function show_data()
    {
        return $this->db->get('barangkantor')->result();
    }

    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_kantor($id)
    {
        return $this->db->get_where('barangkantor',['id_barang'=> $id])->row_array();
    }

    public function update_data($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}