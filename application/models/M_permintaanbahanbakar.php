<?php

class M_permintaanbahanbakar extends CI_Model
{

    public function show_data()
    {
        return $this->db->query("SELECT * FROM akun s left join role sa on s.id_role=sa.id_role left join divisi d on d.id_divisi=s.id_divisi")->result();
    }
    
    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function edit_bahanbakar($id)
    {
        return $this->db->get_where('bahanbakar',['id_bahanbakar'=> $id])->row_array();
    }
    public function update_data($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

     public function check_quantity($nama_barang, $jumlah)
    {
        $this->db->select('stok');
        $this->db->from('bahanbakar');
        $this->db->where('jenis', $nama_barang);
        $query = $this->db->get();
        $stok = $query->row()->stok;

        // Check if the quantity in the database is less than or equal to 10
        if ($stok <= 10) {
            return false;
        }
        
        return true;
    }
}