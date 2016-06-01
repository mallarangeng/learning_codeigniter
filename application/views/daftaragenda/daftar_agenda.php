<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<title>Daftar Hadir Praktikum</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body >
<div class="container">
<h2>Learning Schedule Codeigniter</h2>
<hr>
<a href="<?php echo site_url('daftaragenda/tambah_agenda');?>">Tambah Agenda</a>
<br />
<?php foreach ($daftar_agenda as $agenda) { ?>
<h4><strong><?php echo $agenda->nama;?></strong></h4>
<?php echo $agenda->keterangan;?>
<br>
<a href="<?php echo site_url('daftaragenda/edit_agenda/'.$agenda->id_agenda);?>">Edit</a> |
<a href="<?php echo site_url('daftaragenda/delete_agenda/'.$agenda->id_agenda);?>">Delete</a>
<hr>
<?php } ?>
</div>
</body>
</html>