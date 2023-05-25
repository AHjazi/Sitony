<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Barang Kantor</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Brand</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($barangkantor as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_barang ?></td>
                    <td><?php echo $p->kode_barang ?></td>
                    <td><?php echo $p->nama_barang ?></td>
                    <td><?php echo $p->brand ?></td>
                    <td><?php echo $p->stok ?></td>
                    <td><?php echo $p->id_satuan ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>