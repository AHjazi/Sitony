<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Tambah Data Barang Masuk</h5>
    <div class="card-body">
        <div class="mb-3 row">
            <label for="html5-text-input" class="col-md-2 col-form-label">Kode Barang</label>
            <div class="col-md-10">
                <input class="form-control" type="text" value="Sneat" id="html5-text-input" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="html5-search-input" class="col-md-2 col-form-label">Nama Barang</label>
            <div class="col-md-10">
                <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="html5-email-input" class="col-md-2 col-form-label">Kategori</label>
            <div class="col-md-10">
                <input class="form-control" type="email" value="john@example.com" id="html5-email-input" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal Barang Masuk</label>
            <div class="col-md-10">
                <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="html5-time-input" class="col-md-2 col-form-label">Jam Barang Masuk</label>
            <div class="col-md-10">
                <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
            </div>
        </div>
        <div class="mb-3 row">
            <label for="html5-text-input" class="col-md-2 col-form-label">Jumlah</label>
            <div class="col-md-5">
                <input class="form-control" type="number" value="Sneat" id="html5-text-input" />
            </div>
            <br>
            <td>
                <a type="submit"><button class="btn rounded-pill btn-success"><i class='bx bxs-save'></i>
                        Simpan</i></button></a>
                <a type="reset"><button class="btn rounded-pill btn-danger"><i class='bx bx-reset'></i>
                        Reset</i></button></a>
            </td>

        </div>
    </div>
</div>



<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Barang Masuk</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Tanggal Masuk</th>
                    <th>Jam Barang Masuk</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                    <td>1.</td>
                    <td>Albert Cook</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-save me-1"></i>
                                    Simpan</a>
                                <a class="dropdown-item" href="<?php echo base_url('editbarangmasuk')?>"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Katak Bizer</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url('editbarangmasuk')?>"><i
                                        class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href=""><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>