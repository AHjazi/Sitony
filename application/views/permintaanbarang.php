<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Permintaan Barang</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Permintaan</th>
                    <th>Nama Barang</th>
                    <th>Nama Karyawan</th>
                    <th>Divisi</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <?php $no=1; foreach($permintaan as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_permintaan ?></td>
                    <td><?php echo $p->nama_barang ?></td>
                    <td><?php echo $p->nama_pegawai ?></td>
                    <td><?php echo $p->divisi ?></td>
                    <td><?php echo $p->jumlah ?></td>
                    <td>
                        <div class="mt-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#modalCenter">
                                Eksekusi
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">PENGISIAN PETUGAS</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="nameWithTitle" class="form-label">Name Petugas</label>
                                                    <input type="text" id="nameWithTitle" class="form-control"
                                                        placeholder="Enter Name" />
                                                </div>
                                            </div>
                                            <div class="col mb-3">
                                                <label for="nameWithTitle" class="form-label">Tanggal</label>
                                                <input type="date" id="nameWithTitle" class="form-control"
                                                    placeholder="DD / MM / YY" />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            <button href="<?php echo base_url('permintaanbarang/eksekusipermintaan')?>"
                                                type="button" class="btn btn-primary">Terima Permintaan</button>
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