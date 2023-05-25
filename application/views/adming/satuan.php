<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Satuan</h5>
    <div class="table-responsive text-nowrap">
        <td><a href="<?php echo base_url('./adming/satuan/tambah_satuan')?>"><button
                    class="btn rounded-pill btn-primary" style="margin-left:20px"><i class='bx bxs-folder-plus'></i>
                    Tambah
                    Data</i></button></a></td>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($satuan as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->jenis_satuan ?></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="<?php echo base_url('./adming/satuan/hapus_satuan/'. $p->id_satuan)?>"><i
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