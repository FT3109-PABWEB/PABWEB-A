<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh URL</title>
</head>
<body>
    <h1>Contoh URL</h1>
    <p>1. Base_url()</p>
    <?php echo base_url () ?>
    <br>
    <p>Ini adalah gambar</p>
    <img src="<?php echo base_url('assets/20210401_145336_0000.jpg') ?>" width="426px" height="240px">
    <p>2. Site_url()</p>
    <?php echo site_url () ?>
    <br>
    <p><a href="<?php echo site_url('halaman')?>">Ke Halaman View</a></p>
    <br>
    <?php echo anchor('url/detail/1', 'Ke halaman detail')?>
    <br>
    <?php echo anchor('url/blank', 'Ke halaman blank')?>
</body>
</html>