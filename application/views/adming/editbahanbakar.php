<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Edit Data Bahan Bakar</h5>
        <div class="card-body">
            <form action="<?php echo base_url('./adming/bahanbakar/update_data_aksi/' . $bahanbakar['id_bahanbakar'])?>"
                method="POST">
                <div class="mb-3 row">
                    <!-- <label for="html5-text-input" class="col-md-2 col-form-label">ID</label> -->
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" value="<?php echo $bahanbakar['id_bahanbakar'] ?>"
                            id="html5-text-input" name="id_bahanbakar" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Kode Bahan Bakar</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $bahanbakar['kode_bahanbakar'] ?>"
                            id="html5-text-input" name="kode_bahanbakar" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Jenis</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="<?php echo $bahanbakar['jenis'] ?>"
                            id="html5-search-input" name="jenis" />
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
                        <input class="form-control" type="text" name="keperluan"
                            value="<?php echo $bahanbakar['keperluan'] ?>" id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Stok</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" name="stok" value="<?php echo $bahanbakar['stok'] ?>"
                            id="html5-password-input" />
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