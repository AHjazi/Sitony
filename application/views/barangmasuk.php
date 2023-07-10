<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Barang Masuk</h5>
     <div class="p-3">
            <a href="<?php echo base_url('LaporanBarangMasuk/exportpdf'); ?>" class="btn btn-danger"><i class="bx bxs-file-pdf"></i>PDF</a>
        </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Barang Masuk</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Barang Masuk</th>
                    <th>Jam Barang Masuk</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($barangmasuk as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_barangmasuk ?></td>
                    <td><?php echo $p->kode_barang ?></td>
                    <td><?php echo $p->nama_barang ?></td>
                    <td><?php echo $p->tgl_barangmasuk ?></td>
                    <td><?php echo $p->jam_barangmasuk ?></td>
                    <td><?php echo $p->jumlah ?></td>

                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>