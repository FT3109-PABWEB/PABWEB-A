<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Ur</h1>
    <p>Base_url()</p>
    <?php echo base_url() ?>

    <br>
    <p>ini adalah gambar</p>
    <img src="<?php echo base_url('assets/LogoKremes.png') ?>"width="200px" height="150px">

    <br>
    <p>2.Site_url()</p>
    <?php echo site_url()?>

    <br>
    <p><a href="<?php echo site_url('halaman')?>">Ke halaman View</a></p>

    <br>
    <?php echo anchor ('url/detail/1','ke halaman detail') ?>
    </br>

    <br>
    <?php echo anchor ('url/blank','ke halaman blank') ?>
    </br>

</body>
</html>
