<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:px;">
    <div class="col-xl">
        <h5 class="card-header">Tambah Akun</h5>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('akun/tambah_data_aksi')?>" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Username</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bxs-user-circle"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Username" aria-label="NIK"
                                aria-describedby="basic-icon-default-fullname2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Password</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bxs-lock"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="Password" aria-label="NIK"
                                aria-describedby="basic-icon-default-fullname2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">NIK</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bxs-user-rectangle"></i></span>
                            <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="NIK"
                                aria-label="NIK" aria-describedby="basic-icon-default-fullname2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Nama</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" id="basic-icon-default-company" class="form-control" placeholder="Nama"
                                aria-label="Nama" aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Divisi</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-street-view"></i></span>
                            <input type="text" id="basic-icon-default-company" class="form-control" placeholder="Divisi"
                                aria-label="Divisi" aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input type="text" id="basic-icon-default-email" class="form-control" placeholder="Email"
                                aria-label="Email" aria-describedby="basic-icon-default-email2" />
                            <span id="basic-icon-default-email2" class="input-group-text"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Nomer Telpon</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bx-phone"></i></span>
                            <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                placeholder="+62" aria-label="+62" aria-describedby="basic-icon-default-phone2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Golongan Darah</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bxs-donate-blood"></i></span>
                            <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                placeholder="Golongan Darah" aria-label="+62"
                                aria-describedby="basic-icon-default-phone2" />
                        </div>
                    </div>
                    <div style="margin-left:10px;">
                        <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                                Simpan</i></button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>