<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Edit Data Akun</h5>
        <div class="card-body">
            <form action="<?php echo base_url('akun/update_data_aksi/' . $akun['id_user'])?>" method="POST">
                <div class="mb-3 row">
                    <!-- <label for="html5-text-input" class="col-md-2 col-form-label">ID</label> -->
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" value="<?php echo $akun['id_user'] ?>"
                            id="html5-text-input" name="id_user" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Username</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $akun['username'] ?>"
                            id="html5-text-input" name="username" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $akun['password'] ?>"
                            id="html5-search-input" name="password" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">NIP</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $akun['nip'] ?>"
                            id="html5-search-input" name="nip" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $akun['nama'] ?>"
                            id="html5-search-input" name="nama" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Divisi</label>
                    <div class="col-md-10">
                        <select class="form-select" id="exampleFormControlSelect1" name="id_divisi"
                            aria-label="Default select example">
                            <option selected>Pilih Satuan</option>
                            <?php foreach ($divisi as $s){
                                ?>;
                            <option value="<?= $s->id_divisi?>"><?= $s->divisi ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="email" value="<?php echo $akun['email'] ?>" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Nomer Telepon</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" name="no_telp" value="<?php echo $akun['no_telp'] ?>"
                            id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Goldar</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="goldar" value="<?php echo $akun['goldar'] ?>"
                            id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">File</label>
                    <div class="col-md-10">
                        <input class="form-control" type="file" name="file" value="<?php echo $akun['file'] ?>"
                            id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Role</label>
                    <div class="col-md-10">
                        <select class="form-select" id="exampleFormControlSelect1" name="id_role"
                            aria-label="Default select example">
                            <option selected>Pilih Role</option>
                            <?php foreach ($role as $s){
                                ?>;
                            <option value="<?= $s->id_role?>"><?= $s->rolee ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div style="margin-left:10px;margin-top:10px;">
                    <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                            Simpan</i></button></a>
                    <a href="<?php echo base_url('bahanbakar')?>"><button class="btn rounded-pill btn-danger"><i
                                class='bx bx-arrow-back'></i>Kembali</i></button></a>
                </div>
            </form>
        </div>
    </div>