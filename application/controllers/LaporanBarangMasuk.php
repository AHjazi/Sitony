<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require_once('vendor\fpdf\fpdf.php');

class LaporanBarangMAsuk extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
		$this->load->view('templates/navbar');
        $this->load->view('laporanbarangmasuk');
        $this->load->view('templates/footer');
	}

	public function exportpdf()
    {
        // Load model data
        $data = $this->M_barangmasuk->cetak()->result();

        // Initialize FPDF object
        $pdf = new FPDF();

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('Arial', 'B', 12);

        // Title
        $pdf->Cell(0, 10, 'Laporan Barang Masuk', 0, 1, 'C');
        $pdf->Ln(5);

        // Table headers
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(10, 7, 'No', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Kode Barang', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Nama Barang', 1, 0, 'C');
        $pdf->Cell(40, 7, 'Tanggal Masuk', 1, 0, 'C');
        $pdf->Cell(30, 7, 'Jumlah', 1, 1, 'C');

        // Table data
        $pdf->SetFont('Arial', '', 10);
        $no = 1;
        foreach ($data as $row) {
            $pdf->Cell(10, 7, $no++, 1, 0, 'C');
            $pdf->Cell(30, 7, $row->kode_barang, 1, 0, 'C');
            $pdf->Cell(40, 7, $row->nama_barang, 1, 0, 'C');
            $pdf->Cell(40, 7, $row->tgl_barangmasuk, 1, 0, 'C');
            $pdf->Cell(30, 7, $row->jumlah, 1, 1, 'C');
        }

        // Output the PDF file
        $pdf->Output('permintaan_barang_masuk.pdf', 'D');
    }
}