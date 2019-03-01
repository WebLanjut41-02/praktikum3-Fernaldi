<table border="1px">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <?php foreach ($value as $v) { ?>

    <tr>
    <td><?=$v->ID ?></td>
    <td><?=$v->Nama ?></td>
    <td><?=$v->Harga ?></td>
    <td><input type="number" name="jumlah" min="1"></td>
    </tr>
    <?php } ?>
</table>