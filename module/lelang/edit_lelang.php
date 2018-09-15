 <?php
 
		$id_lelang = @$_GET['id_lelang'];
		$sql = mysql_query("select * from lelang where id_lelang='$id_lelang'") or die(mysql_error());
		$data = mysql_fetch_array($sql);
		$status = $data['status'];
		
?>
 
 <div class="row">
	<div class="col-lg-8">
		<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Lelang</h3>
            </div>
                <form action="" method="post">
					<div class="box-body">
                        <div class="form-group">
                            <label>Nama Lelang</label>
                            <input type="text" name="nama_lelang" class="form-control" value="<?php echo $data['nama_lelang']; ?>" required>
                        </div>
						<div class="form-group">
                            <label>Harga Perkiraan Sendiri (HPS)</label>
                            <input type="text" name="hps" class="form-control" value="<?php echo $data['hps']; ?>" required>
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
$nama = $_POST['nama_lelang'];
$hps = $_POST['hps'];
$status = $_POST['status'];

$edit = $_POST['edit_user'];

if($edit){
	mysql_query("UPDATE lelang SET nama_lelang='$nama', hps='$hps', status='$status' WHERE id_lelang='$id_lelang'") or die(mysql_error());
	?>
		<script type="text/javascript"> alert("data lelang berhasil diedit");
			window.location.href="../spktender/halaman_utama.php?page=lelang";
		</script>
	<?php
	}

?>