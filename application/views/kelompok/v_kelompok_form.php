<title>Form Kelompok</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap.min.css">
<body class="container">
<h3>Data Kelompok</h3>
 
 <form role="form" action="<?php echo site_url('kelompok/proses_tambah_kelompok'); ?>" method="post" class="form-horizontal col-md-4">
    <div class="form-group">
    <label>Kode Kelompok</label>
    <input name="id_kelompok" type="text" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Nama Kelompok</label>
    <input name="nm_kelompok" type="text" class="form-control" required>
  </div>

  

    <div class="form-group">
    <label>Parent / Desa / Daerah</label>
    <select required class="form-control" name="parent">
      <option value="0">Pilih Parent</option>
        <option value="2016001">Pondok Alam Permai  (PAP)</option>
        <option value="2016006">Jati</option>
        <option value="2016011">Kutajaya</option>
        <option value="2016022">Jayanti</option>
        <option value="2016029">Tigaraksa</option>
        <option value="2016036">Cikupa</option>
        <option value="2016041">Periuk Jaya</option>
         
    </select>
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input name="alamat" type="text" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Nomor Handphone</label>
    <input type="text" name="nohp" class="form-control" required>
  </div>
  <div class="form-group">
    <label>Penjab KBM Desa/Kelompok</label>
    <input name="penjab" type="text" class="form-control" required>
  </div>

    <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>
    
  <div class="form-group">
    <input type="submit" name="simpan" value="Simpan" class="btn btn-info">
    &nbsp;
     <input type="button" name="batal" value="Batal"  onClick="history.back()" class="btn btn-danger">
  </div>
</form>
 </body>