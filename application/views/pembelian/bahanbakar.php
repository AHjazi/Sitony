<div class="card" style="margin-left:25px;margin-right:25px;margin-top:25px;">
    <h5 class="card-header">Data Bahan Bakar</h5>
    <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>

                <tr>
                    <th>No</th>
                    <th>ID Bahan Bakar</th>
                    <th>Kode Bahan Bakar</th>
                    <th>Jenis</th>
                    <th>Satuan</th>
                    <th>Keperluan</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php $no=1; foreach($bahanbakar as $p) :?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $p->id_bahanbakar ?></td>
                    <td><?php echo $p->kode_bahanbakar ?></td>
                    <td><?php echo $p->jenis ?></td>
                    <td><?php echo $p->jenis_satuan ?></td>
                    <td><?php echo $p->keperluan ?></td>
                    <td><?php echo $p->stok ?></td>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>