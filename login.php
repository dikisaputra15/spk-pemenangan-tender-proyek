 <?php

	session_start();
	include "koneksi.php";
	
	if(@$_SESSION['level'] == "admin" || $_SESSION['level'] == "vendor" || $_SESSION['level'] == "pimpinan"){
	header("location: halaman_utama.php");
	}else{

?>
 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Login</h3>
            </div>
			<form role="form" method="POST" action="">
              <div class="box-body">
				<div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password"  placeholder="Password">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
				<input type="submit" class="btn btn-success" name="login" value="Login">
              </div>
            </form>
			<?php
			
				include_once("koneksi.php");
				
				$user		= $_POST['username'];
				$password	= md5($_POST['password']);
				$login 		= $_POST['login'];
				
				if($login){
					$query=mysql_query("SELECT * FROM user WHERE username='$user' and password='$password' and status='on'");
					$jml = mysql_num_rows($query);

					if($jml == 0){
						echo '<script language="javascript">alert("User atau pass salah!"); document.location="index.php";</script>';
					}else{
						$row = mysql_fetch_assoc($query);
						
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['level'] = $row['level'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						
						if($_SESSION['level'] == "admin" || $_SESSION['level'] == "vendor" || $_SESSION['level'] == "pimpinan"){ 
						echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="halaman_utama.php";</script>';
						}
				}
			}
			
			?>
		</div>
	</div>
</div>
<?php
	}
?>