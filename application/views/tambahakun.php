<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Tambah Akun</h5>
        <div class="card-body">
            <form action="<?php echo base_url('akun/tambah_data_aksi')?>" method="POST">
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">IDB</label>
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" value="" id="html5-text-input" name="id_user" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Username</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="html5-text-input" name="username" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="html5-search-input" name="password" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-email-input" class="col-md-2 col-form-label">NIP</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" value="" id="html5-email-input" name="nip" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="nama" value="" id="html5-url-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlSelect1" class="form-label">Divisi</label>
                    <select class="form-select" id="exampleFormControlSelect1" name="divisi"
                        aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Pcs</option>
                        <option value="2">Liter</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input class="form-control" type="email" name="email" value="" id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Nomer Telpon</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" name="no_telp" value="" id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Golongan Darah</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="goldar" value="" id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Role</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="role" value="" id="html5-password-input" />
                    </div>
                </div>
                <div style="margin-left:10px;margin-top:10px;">
                    <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                            Simpan</i></button></a>
                    <a href="<?php echo base_url('akun')?>"><button class="btn rounded-pill btn-danger"><i
                                class='bx bx-arrow-back'></i>Kembali</i></button></a>
                </div>
            </form>
        </div>
    </div>