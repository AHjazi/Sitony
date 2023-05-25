<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Tambah Data Divisi</h5>
    <div class="card-body">
        <form action="<?php echo base_url('divisi/tambah_data_aksi')?>" method="POST">
            <div class="mb-2 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ID Divisi</label>
                <div class="col-md-5">
                    <input class="form-control" type="text" value="<?php $noa = 0; echo $noa++?>" name="id_divisi"
                        id="html5-text-input" readonly />
                </div>
            </div>
            <div class="mb-2 row" style="margin-top:10px;">
                <label for="html5-text-input" class="col-md-2 col-form-label">Divisi</label>
                <div class="col-md-5" style="margin-left:4px;">
                    <input class="form-control" type="text" value="" name="divisi" id="html5-text-input" />
                </div>
            </div>

            <br>
            <div style="margin-left:10px;margin-top:10px;">
                <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                        Simpan</i></button></a>
            </div>
        </form>
        <div style="margin-left:10px;margin-top:10px;">
            <a href="<?php echo base_url('divisi')?>"><button class="btn rounded-pill btn-danger"><i
                        class='bx bx-arrow-back'></i>Kembali</i></button></a>
        </div>
    </div>
</div>