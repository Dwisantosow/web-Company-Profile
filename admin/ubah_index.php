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
        <li class="active">Beranda</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	  <h3><center>Selmat Datang Di halaman beranda</center>
	  </h3>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Input Beranda</h3>
			   <?php
					  // Load file koneksi.php
					  include "sistem/koneksi.php";
					  
					  // Ambil data NIS yang dikirim oleh index.php melalui URL
					  $id = $_GET['id'];
					  
					  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
					  $query = "SELECT * FROM beranda WHERE id='".$id."'";
					  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
					  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
					  ?>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="sistem/simpan_ubah_index.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>">
                </div>
                <div>
                  <textarea class="textarea" name="isi" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $data['isi']; ?></textarea>
                </div>
				<div class="form-group">
                  <label>Gambar</label>
                  <input type="file" name="ubah_gambar">
                </div>
				<div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default">Ubah
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
              </form>
            </div>
          </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "sistem/footer.php";?>