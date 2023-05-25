<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Divisi</h5>
    <div class="table-responsive text-nowrap">
        <td><a href="<?php echo base_url('divisi/tambah_divisi')?>"><button class="btn rounded-pill btn-primary"
                    style="margin-left:20px"><i class='bx bxs-folder-plus'></i> Tambah
                    Data</i></button></a></td>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Divisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($divisi as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->divisi ?></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item"
                                    href="<?php echo base_url('divisi/hapus_divisi/'. $p->id_divisi)?>"><i
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