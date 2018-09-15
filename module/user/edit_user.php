 <?php
 
		$user_id = @$_GET['user_id'];
		$sql = mysql_query("select * from user where user_id='$user_id'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$level = $data['level'];
		$status = $data['status'];
		
?>
<div class="row">
 <div class="col-lg-8">
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit User</h3>
            </div>
                <form action="" method="post">
					<div class="box-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" value="<?php echo $data['password']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Level</label>
							<div> 
								<input type="radio" name="level" id="opsi1" value="vendor" <?php if($level == "vendor"){ echo "checked='true'"; } ?> required> Vendor
								<input type="radio" name="level" id="opsi2" value="admin" <?php if($level == "admin"){ echo "checked='true'"; } ?> required> Admin
								<input type="radio" name="level" id="opsi3" value="pimpinan" <?php if($level == "pimpinan"){ echo "checked='true'"; } ?> required> Pimpinan
							</div>
                        </div>
						<div class="form-group">
                            <label>Status</label>
							<div> 
								<input type="radio" name="status" id="opsi1" value="on" <?php if($status == "on"){ echo "checked='true'"; } ?> required> On
								<input type="radio" name="status" id="opsi2" value="off" <?php if($status == "off"){ echo "checked='true'"; } ?> required> Off
							</div>
                        </div>
                            <input type="submit" name="edit_user" value="Edit" class="btn btn-success">
					 </div>
				   </form>
               </div>
        </div>
</div>

<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$user = $_POST['username'];
$pass = $_POST['pass'];
$level = $_POST['level'];
$status = $_POST['status'];

$edit = $_POST['edit_user'];

if($edit){
	mysql_query("UPDATE user SET nama_lengkap='$nama', email='$email', username='$user', password=md5('$pass'), level='$level', status='$status' WHERE user_id='$user_id'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data user berhasil diedit");
			window.location.href="../spktender/halaman_utama.php?page=user";
		</script>
	<?php
	}

?>