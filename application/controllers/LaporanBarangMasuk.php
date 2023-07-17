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
    $filter_year = $this->input->get('filter_year');
    $filter_month = $this->input->get('filter_month');

    // Load model data
    $data['barangmasuk'] = $this->M_barangmasuk->getFilteredBarangMasuk($filter_year, $filter_month);

    // Initialize FPDF object
    $pdf = new FPDF();

    // Add a page
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('Arial', 'B', 12);
    
    // Title
    // Load the image
    $imagePath = './assets1/img/ca.png'; // Replace with your image file path
    $pdf->Image($imagePath, 8, $pdf->GetY(), 40, 30); // Adjust the X and Y coordinates and the width and height as needed
    // Add the text
    $pdf->Cell(0, 10, 'PERUSAHAAN PERKEBUNAN KELAPA SAWIT', 0, 1, 'C');
    $pdf->Cell(0, 10, 'PT. CANDI ARTHA', 0, 1, 'C');
    $pdf->Cell(0, 6, 'Alamat : Desa Tajau Pecah, Kecamatan Batu Ampar,', 0, 1, 'C');
    $pdf->Cell(0, 6, 'Kabupaten Tanah Laut, Provinsi Kalimantan Selatan,', 0, 1, 'C');
    $pdf->Cell(0, 8, 'candiartha@gmail.com', 0, 1, 'C');
    $pdf->SetLineWidth(0.5); // Set line thickness to 0.1 (adjust as needed)
    $pdf->Line(5, $pdf->GetY(), 200, $pdf->GetY()); // Draw line at current Y position
    $pdf->Ln(3);


    // Table headers
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(10, 7, 'No', 1, 0, 'C');
    $pdf->Cell(50, 7, 'Kode Barang', 1, 0, 'C');
    $pdf->Cell(50, 7, 'Nama Barang', 1, 0, 'C');
    $pdf->Cell(40, 7, 'Tanggal Masuk', 1, 0, 'C');
    $pdf->Cell(30, 7, 'Jumlah', 1, 1, 'C');

    // Table data
    $pdf->SetFont('Arial', '', 10);
    $no = 1;
    foreach ($data['barangmasuk'] as $row) {
        $pdf->Cell(10, 7, $no++, 1, 0, 'C');
        $pdf->Cell(50, 7, $row->kode_barang, 1, 0, 'C');
        $pdf->Cell(50, 7, $row->nama_barang, 1, 0, 'C');
        $pdf->Cell(40, 7, $row->tgl_barangmasuk, 1, 0, 'C');
        $pdf->Cell(30, 7, $row->jumlah, 1, 1, 'C');
    }

    // Output the PDF file
    $pdf->Output('permintaan_barang_masuk.pdf', 'D');
}

}