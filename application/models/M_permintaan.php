<?php

class M_permintaan extends CI_Model
{

    public function show_data()
    {
        return $this->db->get('permintaan')->result();
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

public function update_jumlah() {
    $this->db->trans_start();

    $this->db->query('
        UPDATE bahanbakar bb
        INNER JOIN (
            SELECT nama_barang, jumlah
            FROM permintaan
            WHERE nama_barang IS NOT NULL
        ) p ON bb.jenis = p.nama_barang
        SET bb.stok = bb.stok - p.jumlah
    ');

    $this->db->query('
        UPDATE barangkantor b
        INNER JOIN (
            SELECT nama_barang, jumlah
            FROM permintaan
            WHERE nama_barang IS NOT NULL
        ) p ON b.nama_barang = p.nama_barang
        SET b.stok = b.stok - p.jumlah
    ');

    $this->db->query('
        UPDATE sparepart s
        INNER JOIN (
            SELECT nama_barang, jumlah
            FROM permintaan
            WHERE nama_barang IS NOT NULL
        ) p ON s.nama = p.nama_barang
        SET s.stok = s.stok - p.jumlah
    ');

    $this->db->query('
        UPDATE permintaan
        SET status = "Disetujui"
        WHERE nama_barang IS NOT NULL
    ');

    $this->db->trans_complete();

    return $this->db->trans_status();
}

public function cetak()
{
    $this->db->select('*');
    $this->db->from('permintaan');
    $query = $this->db->get();
    return $query;
}


}