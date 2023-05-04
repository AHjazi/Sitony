<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Edit Data Barang Kantor</h5>
        <div class="card-body">
            <div class="mb-3 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">Kode Barang</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="Sneat" id="html5-text-input" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-search-input" class="col-md-2 col-form-label">Nama</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="Search ..." id="html5-search-input" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-email-input" class="col-md-2 col-form-label">Brand</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="john@example.com" id="html5-email-input" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="html5-url-input" class="col-md-2 col-form-label">Stok</label>
                <div class="col-md-10">
                    <input class="form-control" type="number" value="https://themeselection.com" id="html5-url-input" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlSelect1" class="form-label">Satuan</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">Pcs</option>
                    <option value="2">Liter</option>
                </select>
            </div>
            <div class="mb-3 row">
                <label for="html5-password-input" class="col-md-2 col-form-label">Keperluan</label>
                <div class="col-md-10">
                    <input class="form-control" type="text" value="" id="html5-password-input" />
                </div>
            </div>
            <td><a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                        Simpan</i></button></a>
                <br>
                <a href="<?php echo base_url('barangkantor')?>"><button class="btn rounded-pill btn-danger"><i
                            class='bx bx-arrow-back'></i>Kembali</i></button></a>
            </td>
        </div>
    </div>