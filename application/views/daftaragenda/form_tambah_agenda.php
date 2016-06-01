<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<title>Daftar Hadir Praktikum</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
<h2>Form Tambah Agenda</h2>
<fieldset>
<form action="<?php echo site_url('daftaragenda/proses_tambah_agenda');?>" method="POST">
Nama : <br/><textarea name="nama" cols="50" class="form-control" rows="3" rows="5"></textarea>
<br/><br/>
Keterangan : <br/><textarea name="keterangan" class="form-control" rows="3" cols="50" rows="5"></textarea>
<br/><br/>
<button type="submit" class="btn btn-info">Tambah</button>
</form>
</fieldset>
</body>
</html>