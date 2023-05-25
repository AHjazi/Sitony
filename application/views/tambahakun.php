<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Tambah Akun</h5>
        <div class="card-body">
            <form action="<?php echo base_url('akun/tambah_data_aksi')?>" method="POST">
                <div class="mb-3 row">
                    <!-- <label for="html5-text-input" class="col-md-2 col-form-label">IDB</label> -->
                    <div class="col-md-13">
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
                    <label for="html5-url-input" class="col-md-2 col-form-label">Devisi</label>
                    <div class="col-md-10">
                        <select class="form-select" id="exampleFormControlSelect1" name="devisi"
                            aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Pcs</option>
                            <option value="2">Liter</option>
                        </select>
                    </div>
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
                    <label for="html5-password-input" class="col-md-2 col-form-label">Upload Foto</label>
                    <div class="col-md-10">
                        <input class="form-control" type="file" name="file" value="" id="html5-password-input" />
                    </div>
                </div>
                <div class="col-md">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Role</label>
                    <div class="form-check form-check-inline mt-3">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" />
                        <label class="form-check-label" for="inlineRadio1">Super Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2" />
                        <label class="form-check-label" for="inlineRadio2">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" />
                        <label class="form-check-label" for="inlineRadio3">Karyawan</label>
                    </div>
                </div>
                <div style="margin-left:10px;margin-top:20px;">
                    <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                            Simpan</i></button></a>
                    <a type="reset"><button class="btn rounded-pill btn-danger"><i class='bx bx-reset'></i>
                            Kembali</i></button></a>
                </div>
            </form>
        </div>
    </div>