<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Keluar</h5>
    <div class="p-3">
        <form action="<?php echo base_url('LaporanBarangKeluar/exportpdf'); ?>" method="GET">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="filter_year">Tahun:</label>
                    <select class="form-control" id="filter_year" name="filter_year">
                        <option value="">All</option>
                        <?php
                        // Generate year options based on available years in the data
                        foreach ($years as $year) {
                            echo '<option value="' . $year . '">' . $year . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="filter_month">Bulan:</label>
                    <select class="form-control" id="filter_month" name="filter_month">
                        <option value="">All</option>
                        <?php
                        // Generate month options
                        $months = array(
                            '01' => 'January',
                            '02' => 'February',
                            '03' => 'March',
                            '04' => 'April',
                            '05' => 'May',
                            '06' => 'June',
                            '07' => 'July',
                            '08' => 'August',
                            '09' => 'September',
                            '10' => 'October',
                            '11' => 'November',
                            '12' => 'December'
                        );
                        foreach ($months as $key => $month) {
                            echo '<option value="' . $key . '">' . $month . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-3 mt-3">
                    <label></label>
                    <button type="submit" class="btn btn-danger"><i class="bx bxs-file-pdf"></i>PDF</button>
                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>ID Barang Keluar</th>
                    <th>Tanggal Barang Keluar</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Penerima</th>
                    <th>Petugas</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($barangkeluar as $p) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->tgl_barangkeluar ?></td>
                    <td><?php echo $p->nama_barang ?></td>
                    <td><?php echo $p->jumlah ?></td>
                    <td><?php echo $p->penerima ?></td>
                    <td><?php echo $p->petugas ?></td>
                    <td></td>
                    <td>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>