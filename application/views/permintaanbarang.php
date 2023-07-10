<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Permintaan Barang</h5>
    <div class="table-responsive text-nowrap">
        <div class="p-3">
            <a href="<?php echo base_url('LaporanPermintaanBarang/exportpdf'); ?>" class="btn btn-danger"><i class="bx bxs-file-pdf"></i>PDF</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Permintaan</th>
                    <th>Nama Barang</th>
                    <th>Nama Karyawan</th>
                    <th>Divisi</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
          <tbody class="table-border-bottom-0">
    <?php $no = 1; foreach ($permintaan as $p) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $p->id_permintaan ?></td>
            <td><?php echo $p->nama_barang ?></td>
            <td><?php echo $p->nama_pegawai ?></td>
            <td><?php echo $p->divisi ?></td>
            <td><?php echo $p->jumlah ?></td>
            <td><?php echo $p->status ?></td>
            <td>
                <div class="mt-3">
                    <?php if ($p->status == 'Disetujui') : ?>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter" disabled>
                            Eksekusi
                        </button>
                    <?php else : ?>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            Eksekusi
                        </button>
                    <?php endif; ?>

                    <!-- Modal -->
                    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                        <!-- Modal content here -->
                    </div>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>

        </table>
    </div>
</div>