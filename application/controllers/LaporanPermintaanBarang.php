<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Font;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Color;

class LaporanPermintaanBarang extends CI_Controller {

 public function exportpdf()
    {
        // Load model data
        $data = $this->M_permintaan->cetak()->result();

        // Create new Spreadsheet object
        $spreadsheet = new Spreadsheet();

        // Create new worksheet
        $worksheet = $spreadsheet->getActiveSheet();

        // Set page properties
        $worksheet->getPageSetup()->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_A4);

        // Add data and styles to the worksheet
        // ... your code here ...

        // Generate PDF from the Spreadsheet
        $writer = IOFactory::createWriter($spreadsheet, 'Mpdf');
        $writer->save('permintaan_barang.pdf');

        // Set headers to force download the PDF file
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="permintaan_barang.pdf"');
        header('Cache-Control: max-age=0');

        // Output the PDF file
        readfile('permintaan_barang.pdf');
    }
}