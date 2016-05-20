<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/css/style.css">
	
</head>
<body>

<div id="container">
	<h1>Kalkulator dengan CodeIgniter</h1>
	<form action="<?php echo site_url('calculator/hasil_hitung'); ?>" method="POST" >
		&nbsp;<input type="text" name="angka1"><br><br>
		&nbsp;<input type="text" name="angka2"><br><br>
		&nbsp;<select name="pilih-hitung">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">x</option>
			<option value=":">:</option>
		</select><br><br>
		&nbsp;<input type="submit" value="Hitung">


	</form>

	<div id="body">
</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>