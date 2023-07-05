<div class="row mb-5" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <div class="card">
        <h5 class="card-header">List User</h5>
        <div class="table-responsive text-nowrap">
            <td><a href="<?php echo base_url('akun/tambah_akun')?>"><button class="btn rounded-pill btn-primary"
                        style="margin-left:20px"><i class='bx bxs-folder-plus'></i> Tambah
                        Data</i></button></a></td>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id User</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Email</th>
                        <th>Nomer Telpon</th>
                        <th>Golongan Darah</th>
                        <th>Gambar</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php $no=1; foreach($akun as $p) :?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $p->id_user ?></td>
                        <td><?php echo $p->username ?></td>
                        <td><?php echo $p->password ?></td>
                        <td><?php echo $p->nip ?></td>
                        <td><?php echo $p->nama ?></td>
                        <td><?php echo $p->divisi ?></td>
                        <td><?php echo $p->email ?></td>
                        <td><?php echo $p->no_telp ?></td>
                        <td><?php echo $p->goldar ?></td>
                        <td><?php echo $p->file ?></td>
                        <td><?php echo $p->rolee ?></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item"
                                        href="<?php echo base_url('akun/edit_akun/'. $p->id_user)?>"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item"
                                        href="<?php echo base_url('akun/hapus_bahanbakar/'. $p->id_user)?>"><i
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
    <!--/ Contextual 