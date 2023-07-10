<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Keluar</h5>
    <div class="p-3">
            <a href="<?php echo base_url('LaporanBarangKeluar/exportpdf'); ?>" class="btn btn-danger"><i class="bx bxs-file-pdf"></i>PDF</a>
        </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID Barang Keluar</th>
                    <th>Tanggal Barang Keluar</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Penerima</th>
                    <th>Petugas</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($barangkeluar as $p) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->tgl_barangkeluar ?></td>
                    <td><?php echo $p->nama_barang ?></td>
                    <td><?php echo $p->jumlah ?></td>
                    <td><?php echo $p->penerima ?></td>
                    <td><?php echo $p->petugas ?></td>
                    <td></td>
                    <td>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>