<?php

class M_detailakun extends CI_Model
{

    public function show_data()
    {
        return $this->db->query("SELECT * FROM divisi s left join divisi sa on s.id_divisi=sa.id_divisi")->result();
    }

    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_akun($id)
    {
        return $this->db->get_where('akun',['id_user'=> $id])->row_array();
    }
    public function update_data($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}