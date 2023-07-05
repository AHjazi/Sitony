<div class="card mb-4" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Permintaan Barang Masuk</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Permintaan</th>
                    <th>NIP</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Nama Pegawai</th>
                    <th>Divisi</th>
                    <th>Keperluan</th>
                    <th>Jumlah</th>
                    <th>Status Permintaan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($permintaan as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_permintaan ?></td>
                    <td><?php echo $p->nip ?></td>
                    <td><?php echo $p->nama_barang ?></td>
                    <td><?php echo $p->id_satuan ?></td>
                    <td><?php echo $p->nama_pegawai ?></td>
                    <td><?php echo $p->divisi ?></td>
                    <td><?php echo $p->keperluan ?></td>
                    <td><?php echo $p->jumlah ?></td>
                    <td><?php echo $p->status ?></td>

                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>