<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Spare Part</h5>
<?php echo $this->session->flashdata('pesan'); ?>
    <td><a href="<?php echo base_url('sparepart/tambah_sparepart')?>"><button class="btn rounded-pill btn-primary"
    style="margin-left:20px"><i class='bx bxs-folder-plus'></i> Tambah
    Data</i></button></a></td>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Sparepart</th>
                    <th>Kode Spare Part</th>
                    <th>Nama</th>
                    <th>Brand</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Keperluan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($sparepart as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_sparepart?></td>
                    <td><?php echo $p->kode_sparepart ?></td>
                    <td><?php echo $p->nama ?></td>
                    <td><?php echo $p->brand ?></td>
                    <td><?php echo $p->stok ?></td>
                    <td><?php echo $p->jenis_satuan ?></td>
                    <td><?php echo $p->keperluan ?></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="<?php echo base_url('sparepart/edit_sparepart/'. $p->id_sparepart)?>"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="<?php echo base_url('sparepart/hapus_sparepart/'. $p->id_sparepart)?>"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>