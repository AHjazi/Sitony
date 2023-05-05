<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Masuk</h5>
    <td><a href="<?php echo base_url('tambahbahanbakar')?>"><button class="btn rounded-pill btn-primary"
                style="margin-left:20px"><i class='bx bx-printer'></i> Cetak Laporan</i></button></a></td>
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