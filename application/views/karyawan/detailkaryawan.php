<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Profile Details</h5>
    <div class="card-body">
        <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="<?= base_url(); ?>assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100"
                width="100" id="uploadedAvatar" />
            <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                </label>
                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                    <i class="bx bx-reset d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Reset</span>
                </button>

                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
            </div>
        </div>
    </div>
</div>
<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:px;">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('./karyawan/detailkaryawan/update_data_aksi/' . $akun['id_user'])?>"
                    method="POST">
                    <div class="mb-3 row">
                        <!-- <label for="html5-text-input" class="col-md-2 col-form-label">ID</label> -->
                        <div class="col-md-10">
                            <input class="form-control" type="hidden" value="<?php echo $akun['id_user'] ?>"
                                id="html5-text-input" name="id_user" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Username</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bxs-user-circle"></i></span>
                            <input type="text" value="<?php echo $akun['username']?>" class="form-control"
                                id="basic-icon-default-fullname" placeholder="Username" aria-label="NIK" name="username"
                                aria-describedby="basic-icon-default-fullname2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Password</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bxs-lock"></i></span>
                            <input type="text" value="<?php echo $akun['password']?>" class="form-control"
                                id="basic-icon-default-fullname" placeholder="Password" aria-label="NIK" name="password"
                                aria-describedby="basic-icon-default-fullname2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">NIP</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                    class="bx bxs-user-rectangle"></i></span>
                            <input type="text" value="<?php echo $akun['nip']?>" class="form-control"
                                id="basic-icon-default-fullname" placeholder="NIP" aria-label="NIP" name="nip"
                                aria-describedby="basic-icon-default-fullname2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Nama</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-user"></i></span>
                            <input type="text" value="<?php echo $akun['nama']?>" id="basic-icon-default-company"
                                class="form-control" placeholder="Nama" aria-label="Nama" name="nama"
                                aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-company">Divisi</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                    class="bx bx-street-view"></i></span>
                            <input type="text" value="<?php echo $akun['divisi']?>" id="basic-icon-default-company"
                                class="form-control" placeholder="Divisi" aria-label="Divisi" name="divisi"
                                aria-describedby="basic-icon-default-company2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input type="text" value="<?php echo $akun['email']?>" id="basic-icon-default-email"
                                class="form-control" placeholder="Email" aria-label="Email" name="email"
                                aria-describedby="basic-icon-default-email2" />
                            <span id="basic-icon-default-email2" class="input-group-text"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Nomer Telpon</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bx-phone"></i></span>
                            <input type="text" value="<?php echo $akun['no_telp']?>" id="basic-icon-default-phone"
                                class="form-control phone-mask" placeholder="+62" name="no_telp" aria-label="+62"
                                aria-describedby="basic-icon-default-phone2" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-phone">Golongan Darah</label>
                        <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                    class="bx bxs-donate-blood"></i></span>
                            <input type="text" value="<?php echo $akun['goldar']?>" id="basic-icon-default-phone"
                                class="form-control phone-mask" placeholder="Golongan Darah" name="goldar"
                                aria-label="+62" aria-describedby="basic-icon-default-phone2" />
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