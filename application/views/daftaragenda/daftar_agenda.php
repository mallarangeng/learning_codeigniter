<!DOCTYPE html>
<html>
<head>
<title>Daftar Hadir Praktikum</title>
</head>
<body>
<h2>Daftar Agenda</h2>
<a href="<?php echo site_url('daftaragenda/tambah_agenda');?>">Tambah Agenda</a>
<br />
<br />
<?php foreach ($daftar_agenda as $agenda) { ?>
<h4><?php echo $agenda->nama;?></h4>
<?php echo $agenda->keterangan;?>
<br>
<a href="<?php echo site_url('daftaragenda/edit_agenda/'.$agenda->id_agenda);?>">Edit</a> |
<a href="<?php echo site_url('daftaragenda/delete_agenda/'.$agenda->id_agenda);?>">Delete</a>
<hr>
<?php } ?>
</body>
</html>