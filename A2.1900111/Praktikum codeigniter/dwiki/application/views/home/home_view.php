
<h1> HALAMAN UTAMA </h1>
<ul>
    <li>
        <?php echo anchor('mhs','Data Mahasiswa')?>
    </li>
    <li>
        <?php echo anchor('prodi','Data Program Studi')?>
</li>
</ul>
<p>
    <?php
    $nama_lengkap = $this->session->userdata('nama_lengkap');
    echo "selamat datang{$nama_lengkap}  ! ";
    ?>
</p>
<?php echo anchor ('logout','Logout') ?>


