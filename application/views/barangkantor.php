<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Kantor</h5>
    <div class="table-responsive text-nowrap">
        <td><a href="<?php echo base_url('barangkantor/tambah_kantor')?>"><button class="btn rounded-pill btn-primary"
                    style="margin-left:20px"><i class='bx bxs-folder-plus'></i> Tambah
                    Data</i></button></a></td>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Brand</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Keperluan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($barangkantor as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_barang ?></td>
                    <td><?php echo $p->kode_barang ?></td>
                    <td><?php echo $p->nama_barang ?></td>
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
                                    href="<?php echo base_url('barangkantor/edit_kantor/'. $p->id_barang)?>"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="<?php echo base_url('barangkantor/hapus_kantor/'. $p->id_barang)?>"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                                < </div>
                            </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>