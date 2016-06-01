<title>Data Kelompok</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>assets/bootstrap/css/bootstrap.min.css">
<body class="container">
<h3>Data Kelompok</h3>
 <table id="example" class="table table-bordered">
    <thead>
      <tr>
        
        <th>Id Kelompok</th>
        <th>Nama Kelompok</th>
        <th>Nama Desa</th>
        <th>Parent</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Penjab</th>
        <th>Password</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($data_kelompok as $data) { ?>
      <tr>
        <td><?php echo $data->id_kelompok;?></td>
        <td><?php echo $data->nm_kelompok;?></td>
        <td><?php echo $data->parent;?></td>
        <td><?php echo $data->alamat;?></td>
        <td><?php echo $data->nohp;?></td>
        <td><?php echo $data->penjab;?></td>
        <td><?php echo $data->password;?></td>
        <td><?php echo $data->penjab; ?></td>
       
        <td><a href="<?php echo base_url('kelompok/ubah/'.$data->id_kelompok); ?>">Edit</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
 <a class="btn btn-info btn-xs" href="<?php echo base_url('kelompok/form_kelompok'); ?>" role="button">Tambah Data</a>