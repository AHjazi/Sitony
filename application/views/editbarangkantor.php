<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Edit Data Barang Kantor</h5>
        <div class="card-body">
            <form action="<?php echo base_url('barangkantor/update_data_aksi')?>" method="POST">
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">IDB</label>
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" value="<?php echo $barangkantor['id_barang'] ?>"
                            id="html5-text-input" name="id_barang" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Kode Barang</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $barangkantor['kode_barang'] ?>"
                            id="html5-text-input" name="kode_barang" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Nama Barang</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $barangkantor['nama_barang'] ?>"
                            id="html5-search-input" name="nama_barang" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-email-input" class="col-md-2 col-form-label">Brand</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $barangkantor['brand'] ?>"
                            id="html5-email-input" name="brand" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Stok</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" name="stok"
                            value="<?php echo $barangkantor['stok'] ?>" id="html5-url-input" />
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
                        <input class="form-control" type="text" name="keperluan"
                            value="<?php echo $barangkantor['keperluan'] ?>" id="html5-password-input" />
                    </div>
                </div>
                <div style="margin-left:10px;margin-top:10px;">
                    <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                            Simpan</i></button></a>
                    <a href="<?php echo base_url('barangkantor')?>"><button class="btn rounded-pill btn-danger"><i
                                class='bx bx-arrow-back'></i>Kembali</i></button></a>
                </div>
            </form>
        </div>
    </div>