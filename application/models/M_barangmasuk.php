<?php

class M_barangmasuk extends CI_Model
{

    public function show_data()
    {
        return $this->db->get('barangmasuk')->result();
    }

   public function getFilteredBarangMasuk($filter_year, $filter_month)
{
    $this->db->select('*');
    $this->db->from('barangmasuk');
    
    if (!empty($filter_year)) {
        $this->db->where('YEAR(tgl_barangmasuk)', $filter_year);
    }

    if (!empty($filter_month)) {
        $this->db->where('MONTH(tgl_barangmasuk)', $filter_month);
    }

    $query = $this->db->get();
    return $query->result();
}


    public function cetak()
{
    $this->db->select('*');
    $this->db->from('barangmasuk');
    $query = $this->db->get();
    return $query;
}

    public function get_data($table){
        return $this->db->get($table);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}