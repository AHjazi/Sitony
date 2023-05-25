<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Spare Part</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Sparepart</th>
                    <th>Kode Spare Part</th>
                    <th>Nama</th>
                    <th>Brand</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($sparepart as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_sparepart ?></td>
                    <td><?php echo $p->kode_sparepart ?></td>
                    <td><?php echo $p->nama ?></td>
                    <td><?php echo $p->brand ?></td>
                    <td><?php echo $p->stok ?></td>
                    <td><?php echo $p->id_satuan ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>