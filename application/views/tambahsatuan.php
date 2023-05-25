<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Tambah Data Satuan</h5>
    <div class="card-body">
        <form action="<?php echo base_url('satuan/tambah_data_aksi')?>" method="POST">
            <div class="mb-2 row">
                <label for="html5-text-input" class="col-md-2 col-form-label">ID Satuan</label>
                <div class="col-md-5">
                    <input class="form-control" type="text" value="<?php $noa = 0; echo $noa++?>" name="id_satuan"
                        id="html5-text-input" readonly />
                </div>
            </div>
            <div class="mb-2 row" style="margin-top:10px;">
                <label for="html5-text-input" class="col-md-2 col-form-label">Jenis Satuan</label>
                <div class="col-md-5" style="margin-left:4px;">
                    <input class="form-control" type="text" value="" name="jenis_satuan" id="html5-text-input" />
                </div>
            </div>
            <div style="margin-left:10px;margin-top:10px;">
                <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                        Simpan</i></button></a>
            </div>
        </form>

        <div style="margin-left:10px;margin-top:10px;">
            <a href="<?php echo base_url('satuan')?>"><button class="btn rounded-pill btn-danger"><i
                        class='bx bx-arrow-back'></i>Kembali</i></button></a>
        </div>



    </div>
</div>