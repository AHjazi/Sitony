<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Tambah Data Sparepart</h5>
        <div class="card-body">
            <form action="<?php echo base_url('sparepart/tambah_data_aksi')?>" method="POST">
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label"></label>
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" name="id_sparepart" value="" id="html5-text-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Kode Sparepart</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="kode_sparepart" id="html5-text-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Nama</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="nama" id="html5-search-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-email-input" class="col-md-2 col-form-label">Brand</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="brand" id="html5-email-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Stok</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" value="" name="stok" id="html5-url-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Satuan</label>
                    <div class="col-md-10">
                        <select class="form-select" id="exampleFormControlSelect1" name="id_satuan"
                            aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Pcs</option>
                            <option value="2">Liter</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Keperluan</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="keperluan" id="html5-password-input" />
                    </div>
                </div>
                <div style="margin-left:10px;margin-top:10px;">
                    <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                            Simpan</i></button></a>
                </div>
            </form>
            <div style="margin-left:10px;margin-top:10px;">
                <a href="<?php echo base_url('sparepart')?>"><button class="btn rounded-pill btn-danger"><i
                            class='bx bx-arrow-back'></i>Kembali</i></button></a>
            </div>

        </div>
    </div>