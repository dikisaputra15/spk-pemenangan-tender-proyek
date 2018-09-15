 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Vendor</h3>
            </div>
			<form role="form" action="" method="POST">
              <div class="box-body">
				<div class="form-group">
                  <label for="examplenamavendor">Nama Vendor</label>
                  <input type="text" class="form-control" name="nama" id="exampleInputvendor" placeholder="Nama Vendor">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pemilik</label>
                  <input type="text" class="form-control" name="pemilik" id="exampleInputEmail1" placeholder="Pemilik">
                </div> 
				<div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Telepon</label>
                  <input type="text" class="form-control" name="telepon" id="exampleInputPassword1" placeholder="Telepon">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<input type="submit" class="btn btn-success" name="tambah" value="Tambah">
              </div>
            </form>
		</div>
	</div>
</div>

<?php

	$nama=@$_POST['nama'];
	$pemilik=@$_POST['pemilik'];
	$alamat=@$_POST['alamat'];
	$telepon=@$_POST['telepon'];
	$tambah =@$_POST['tambah'];
				
		if(@$tambah){
			mysql_query("insert into vendor values('', '$nama', '$pemilik', '$alamat', '$telepon')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("Tambah vendor baru berhasil");
					window.location.href="../spktender/halaman_utama.php?page=vendor";
				</script>
			<?php
		}	
?>