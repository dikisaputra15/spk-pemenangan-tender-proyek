 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Registrasi</h3>
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
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<input type="submit" class="btn btn-success" name="register" value="Register">
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
	$register = @$_POST['register'];
				
		if(@$register){
			mysql_query("insert into user values('', '$nama', '$email', '$username', md5('$password'), 'vendor', 'on')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("Registrasi berhasil silahkan login");
					window.location.href="?page=";
				</script>
			<?php
		}	
?>