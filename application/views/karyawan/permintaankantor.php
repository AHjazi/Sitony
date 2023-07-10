<div class="col-xl-13" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <!-- HTML5 Inputs -->
    <div class="card mb-4">
        <h5 class="card-header">Tambah Data Permintaan Barang Kantor</h5>
        <div class="card-body">
            <form action="<?php echo base_url('./karyawan/permintaankantor/tambah_data_aksi')?>" method="POST">
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label"></label>
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" value="" id="html5-text-input" name="id_barang" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">NIP</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="nip" name="nip" minlength="0" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-text-input" class="col-md-2 col-form-label">Nama Pegawai</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" id="html5-text-input" name="nama" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Divisi</label>
                    <div class="col-md-10">
                        <select class="form-select" id="exampleFormControlSelect1" name="divisi"
                            aria-label="Default select example">
                            <option selected>Pilih Divisi</option>
                            <?php foreach ($divisi as $s){
                                ?>;
                            <option value="<?= $s->divisi?>"><?= $s->divisi ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-search-input" class="col-md-2 col-form-label">Nama Barang</label>
                    <div class="col-md-10">
                        <select class="form-select" id="exampleFormControlSelect1" name="nama_barang"
                            aria-label="Default select example">
                            <option selected disabled>--Pilih--</option>
                            <?php
                            foreach ($barang as $key) {
                                ?>
                            <option value="<?php echo $key->nama_barang ?>"><?php echo $key->nama_barang ?></option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-url-input" class="col-md-2 col-form-label">Satuan</label>
                    <div class="col-md-10">
                        <select class="form-select" id="exampleFormControlSelect1" name="id_satuan"
                            aria-label="Default select example">
                            <option selected>Pilih Satuan</option>
                            <?php foreach ($satuan as $s){
                                ?>;
                            <option value="<?= $s->id_satuan?>"><?= $s->jenis_satuan ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Keperluan</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" value="" name="keperluan" id="html5-password-input" />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="html5-password-input" class="col-md-2 col-form-label">Jumlah</label>
                    <div class="col-md-10">
                        <input class="form-control" type="number" value="" name="jumlah" id="html5-password-input" />
                    </div>
                </div>
                <div style="margin-left:10px;margin-top:10px;">
                    <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                            Simpan</i></button></a>
                </div>
            </form>

        </div>
    </div>