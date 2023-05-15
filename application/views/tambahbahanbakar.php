<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Tambah Data Bahan Bakar</h5>
        <div class="card-body">
            <form action="<?php echo base_url('bahanbakar/tambah_data_aksi')?>" method="POST">
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label"></label>
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" value="" id="html5-text-input" name="id_bahanbakar" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Kode Bahan Bakar</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="kode_bahanbakar" id="html5-text-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Jenis</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="jenis" id="html5-search-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlSelect1" class="form-label">Satuan</label>
                    <select class="form-select" id="exampleFormControlSelect1" name="id_satuan"
                        aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">Pcs</option>
                        <option value="2">Liter</option>
                    </select>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Keperluan</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="keperluan" id="html5-password-input" />
                    </div>
                </div>
                <div style="margin-left:10px;">
                    <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                            Simpan</i></button></a>
                    <a href="<?php echo base_url('bahanbakar')?>"><button class="btn rounded-pill btn-danger"><i
                                class='bx bx-arrow-back'></i>Kembali</i></button></a>
                </div>
        </div>
        </form>
    </div>