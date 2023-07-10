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
                    <th>Surat Permintaan</th>
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
                    <td>
                        <?php if ($p->file !== null && $p->file !== '') : ?>
                        <a href="<?php echo site_url('assets/file/' . $p->file); ?>" target="_blank">Buka File</a>
                        <?php else : ?>
                        (Tidak ada file)
                        <?php endif; ?>

                    </td>
                    <td><?php echo $p->jumlah ?></td>
                    <td><?php echo $p->status ?></td>
                    <td>
                        <div class="mt-3">
                            <?php if ($p->status == 'Disetujui') : ?>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalCenter" disabled>
                                Eksekusi
                            </button>
                            <?php else : ?>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalCenter">
                                Eksekusi
                            </button>
                            <?php endif; ?>

                            <!-- Modal -->
                            <!-- Modal -->
<div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eksekusi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nama_petugas" class="form-label">Nama Petugas</label>
                    <input type="text" class="form-control" id="nama_petugas" name="nama_petugas">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="<?php echo base_url('permintaanbarang/eksekusipermintaan') ?>" class="btn btn-primary">Simpan</a>

            </div>
        </div>
    </div>
</div>

                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>