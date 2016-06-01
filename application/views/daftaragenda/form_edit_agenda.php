<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<title>Daftar Hadir Praktikum</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap.min.css">
</head>
<body class="container">
<h2>Form Edit Agenda</h2>
<fieldset>
<form action="<?php echo site_url('daftaragenda/proses_edit_agenda');?>" method="POST">
Agenda : <br/><textarea name="nama" class="form-control" cols="50" rows="5"><?php echo $agenda->nama;?></textarea>
<br/><br/>
Keterangan : <br/><textarea name="keterangan" class="form-control" cols="50" rows="5"><?php echo $agenda->keterangan;?> </textarea>
<br/><br/>
<input type="hidden" name="id_agenda" value="<?php echo $agenda->id_agenda;?>" />
<button type="submit" class="btn btn-info">Update</button>
</form>
</fieldset>
</body>
</html>