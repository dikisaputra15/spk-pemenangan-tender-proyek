<?php

include "koneksi.php"; 

?>
 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Pendaftaran Lelang Proyek</h3>
            </div>
	
                <form action="" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
						  <label>Nama Vendor :</label>
						  <select name="id_vendor" class="form-control">
							
							<?php
							
							$db=mysql_query("SELECT * from vendor"); 
							while ($data=mysql_fetch_array($db)) {?>
								<option value="<?php echo $data['id_vendor']; ?>"><?php echo $data['nama_vendor']; ?></option>
							<?php	
							}
							?>
								
						  </select>
						</div> 
						<div class="form-group">
						  <label>Nama Lelang :</label>
						  <select name="id_lelang" class="form-control">
							
							<?php
							
							$db=mysql_query("SELECT * from lelang"); 
							while ($data=mysql_fetch_array($db)) {?>
								<option value="<?php echo $data['id_lelang']; ?>"><?php echo $data['nama_lelang']; ?></option>
							<?php	
							}
							?>
								
						  </select>
						</div> 
						<div class="form-group">
                            <label>Tanggal Daftar</label>
                            <input type="date" name="tgl_daftar" class="form-control" required>
                        </div>
						<div class="form-group">
                            <label>File Persyaratan</label>
							<input type="text" name="nama_file" class="form-control" placeholder="masukkan nama file dan nama perusahaan tanpa spasi" required> 
                            <input type="file" name="file" class="form-control" required>
                        </div>
					</div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    </form>
            </div>
	</div>
</div>

<?php

if($_POST['simpan']){
		$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
		$file_name		= $_FILES['file']['name'];
		$file_ext		= strtolower(end(explode('.', $file_name)));
		$file_size		= $_FILES['file']['size'];
		$file_tmp		= $_FILES['file']['tmp_name'];
				
		$vendor			= $_POST['id_vendor'];
		$lelang			= $_POST['id_lelang'];
		$tgl			= $_POST['tgl_daftar'];
		$nama_file	    = $_POST['nama_file'];
				
			if(in_array($file_ext, $allowed_ext) === true){
				if($file_size < 1044070){
						$lokasi = 'module/file/'.$nama_file.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO pendaftaran VALUES('', '$vendor', '$lelang', '$tgl', '$nama_file', '$file_ext', '$file_size', '$lokasi')");
						if($in){
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
	}

?>

