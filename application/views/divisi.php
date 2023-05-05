<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Keluar</h5>
    <div class="table-responsive text-nowrap">
        <td><a href="<?php echo base_url('tambahdivisi')?>"><button class="btn rounded-pill btn-primary"
                    style="margin-left:20px"><i class='bx bxs-folder-plus'></i> Tambah
                    Data</i></button></a></td>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Divisi</th>
                    <th>Jumlah Karyawan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                    <td>Albert Cook</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('editbarangkeluar')?>"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>