 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Lelang</h3>
            </div>
			<form role="form" action="" method="POST">
              <div class="box-body">
				<div class="form-group">
                  <label for="examplenamavendor">Nama Lelang</label>
                  <input type="text" class="form-control" name="nama_lelang" id="exampleInputvendor" placeholder="Nama Lelang">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Perkiraan Sendiri (HPS)</label>
                  <input type="text" class="form-control" name="hps" id="exampleInputEmail1" placeholder="Harga Perkiraan Sendiri (HPS)">
                </div> 
				<div class="form-group">
                    <label for="exampleinputstatus">Status</label>
					<div>
						<input type="radio" name="status" id="opsi1" value="on" required> On
						<input type="radio" name="status" id="opsi2" value="off" required> Off
					</div>
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

	$nama=@$_POST['nama_lelang'];
	$hps=@$_POST['hps'];
	$status=@$_POST['status'];
	$tambah =@$_POST['tambah'];
				
		if(@$tambah){
			mysql_query("insert into lelang values('', '$nama', '$hps', '$status')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("Tambah Lelang baru berhasil");
					window.location.href="../spktender/halaman_utama.php?page=lelang";
				</script>
			<?php
		}	
?>