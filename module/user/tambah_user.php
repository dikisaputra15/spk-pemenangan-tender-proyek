 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah User</h3>
            </div>
			<form role="form" action="" method="POST">
              <div class="box-body">
				<div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="email">
                </div> 
				<div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
				<div class="form-group">
                    <label for="exampleinputlevel">Level</label>
					<div>
						<input type="radio" name="level" id="opsi1" value="admin" required> admin
						<input type="radio" name="level" id="opsi2" value="vendor" required> vendor
						<input type="radio" name="level" id="opsi3" value="pimpinan" required> pimpinan
					</div>
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

	$nama=@$_POST['nama'];
	$email=@$_POST['email'];
	$username=@$_POST['username'];
	$password=@$_POST['password'];
	$level=@$_POST['level'];
	$status=@$_POST['status'];
	$tambah =@$_POST['tambah'];
				
		if(@$tambah){
			mysql_query("insert into user values('', '$nama', '$email', '$username', md5('$password'), '$level', '$status')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("Tambah user baru berhasil");
					window.location.href="../spktender/halaman_utama.php?page=user";
				</script>
			<?php
		}	
?>