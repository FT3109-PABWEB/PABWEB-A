<h1>Data Mahasiswa</h1>
<table border="10">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Prodi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($prodi as $row) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row->nama_prodi ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php echo anchor('home', 'kembali ke home') ?>