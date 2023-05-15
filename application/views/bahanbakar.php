<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Bahan Bakar</h5>
    <div class="table-responsive text-nowrap">
        <td><a href="<?php echo base_url('bahanbakar/tambah_bahanbakar')?>"><button class="btn rounded-pill btn-primary"
                    style="margin-left:20px"><i class='bx bxs-folder-plus'></i> Tambah
                    Data</i></button></a></td>
        <table class="table table-striped">
            <thead>

                <tr>
                    <th>No</th>
                    <th>ID Bahan Bakar</th>
                    <th>Kode Bahan Bakar</th>
                    <th>Jenis</th>
                    <th>Satuan</th>
                    <th>Keperluan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($bahanbakar as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_bahanbakar ?></td>
                    <td><?php echo $p->kode_bahanbakar ?></td>
                    <td><?php echo $p->jenis ?></td>
                    <td><?php echo $p->id_satuan ?></td>
                    <td><?php echo $p->keperluan ?></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="<?php echo base_url('bahanbakar/edit_bahanbakar/'. $p->id_bahanbakar)?>"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item"
                                    href="<?php echo base_url('bahanbakar/hapus_bahanbakar/'. $p->id_bahanbakar)?>"><i
                                        class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>