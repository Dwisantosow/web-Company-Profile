<?php include "sistem/header.php";?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Promo</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  <h3><center>Selmat Datang Di halaman Promo</center>
	  </h3>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Input Data Promo</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="sistem/simpan_promo.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="judul" placeholder="Judul disini:">
                </div>
                <div>
                  <textarea class="textarea" name="isi" placeholder="Isikan Promo disini..." style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
				<div class="form-group">
                  <label>Gambar</label>
                  <input type="file" name="gambar">
                </div>
				<div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default">Simpan
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
              </form>
            </div>
            <div class="box-body">
			<table class="table table-bordered table-hover">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Load file koneksi.php
  include "sistem/koneksi.php";
  $no = 1;
  $query = "SELECT * FROM promo"; // Query untuk menampilkan semua data tugas
  $sql = mysql_query($query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysql_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$no."</td>";
    echo "<td>".$data['judul']."</td>";
    echo "<td><a href='ubah_promo.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='sistem/delete_promo.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
			</div>
          </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "sistem/footer.php";?>