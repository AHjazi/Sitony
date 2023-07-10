<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PermintaanBahanBakar extends CI_Controller {

	
	public function index()
	{
		$data['barang']=$this->db->query("SELECT * FROM bahanbakar where stok>50")->result();
		$data['satuan'] = $this->db->query("SELECT * FROM satuan")->result();
		$data['divisi'] = $this->db->query("SELECT * FROM divisi")->result();
		$this->load->view('templates/karyawan/header');
        $this->load->view('templates/karyawan/sidebar');
		$this->load->view('templates/karyawan/navbar');	
        $this->load->view('./karyawan/permintaanbahanbakar',$data);
        $this->load->view('templates/karyawan/footer');
	}

	public function _rules()
	{
		$this->form_validation->set_rules('id_permintaan','nip','nama_barang','id_satuan','nama_pegawai','id_divisi','keperluan','file','jumlah','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
		// $this->form_validation->set_rules('id_barang','nama_barang','kode_barang','satuan','stok','keperluan','brand','required');
	}
public function tambah_data_aksi()
{
    $this->load->model('M_permintaanbahanbakar');
    $this->load->model('M_permintaan');
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
        $this->tambah();
    } else {
      $config['upload_path'] = './assets/file/';
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file')) {
            echo "Gagal Tambah";
          } else {
        $id_permintaan = $this->input->post('id_permintaan');
        $nip = $this->input->post('nip');
        $nama_barang = $this->input->post('nama_barang');
        $id_satuan = $this->input->post('id_satuan');
        $nama_pegawai = $this->input->post('nama');
        $divisi = $this->input->post('divisi');
        $keperluan = $this->input->post('keperluan');
        $jumlah = $this->input->post('jumlah');
        $status = 'Belum Disetujui';
        $file = $this->upload->data('file_name');

        // Check if the quantity in the database is less than or equal to 10
        $isQuantityValid = $this->M_permintaanbahanbakar->check_quantity($nama_barang, $jumlah);
        if (!$isQuantityValid) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Jumlah tidak memenuhi syarat!</strong> Jumlah yang tersedia kurang dari 10.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('./karyawan/permintaan');
        }

        $data = array(
            'id_permintaan' => $id_permintaan,
            'nip' => $nip,
            'nama_barang' => $nama_barang,
            'id_satuan' => $id_satuan,
            'nama_pegawai' => $nama_pegawai,
            'divisi' => $divisi,
            'keperluan' => $keperluan,
            'file' => $file,
            'jumlah' => $jumlah,
            'status' => $status
        );

        $this->M_permintaanbahanbakar->insert_data($data, 'permintaan');

        // $this->M_permintaan->update_jumlah();

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Data berhasil ditambahkan !</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('./karyawan/permintaan');
    }

}
}
}