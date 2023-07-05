<?php

class M_barangkeluar extends CI_Model
{
public function insert_data_keluar()
{
    $this->db->select('id_permintaan, nama_barang, jumlah, nama_pegawai');
    $this->db->from('permintaan');
    $data = $this->db->get()->result_array();

    foreach ($data as $row) {
        // Check if the data already exists in the barangkeluar table
        $existingData = $this->db->get_where('barangkeluar', array(
            'nama_barang' => $row['nama_barang'],
            'jumlah' => $row['jumlah'],
            'penerima' => $row['nama_pegawai'],
        ))->row_array();

        if (!$existingData) {
            $insert_data = array(
                'tgl_barangkeluar' => date('Y-m-d H:i:s'),
                'nama_barang' => $row['nama_barang'],
                'jumlah' => $row['jumlah'],
                'penerima' => $row['nama_pegawai'],
            );

            $this->db->insert('barangkeluar', $insert_data);
        }
    }
}


    public function show_data()
    {
        return $this->db->get('barangkeluar');
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