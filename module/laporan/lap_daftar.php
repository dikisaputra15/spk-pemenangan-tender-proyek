<div class="box">
    <div class="box-header">
        <h3 class="box-title">Laporan Pendaftar Lelang Proyek</h3>
    </div>
			
			<div class="box-body">
              <table class="table table-bordered table-hover" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lelang</th>
                  <th>Nama Vendor</th>
                  <th>Pemilik</th>
                  <th>No Telepon</th>
                  <th>Tgl Daftar</th>
                  <th>File</th>
                </tr>
                </thead>
				<tbody>
                <?php
					$no=1;
					$sql=mysql_query("select pendaftaran.nama_file, pendaftaran.tipe_file, pendaftaran.ukuran_file,pendaftaran.file, pendaftaran.tgl_daftar, 
					vendor.nama_vendor,vendor.pemilik,vendor.telepon,lelang.nama_lelang from pendaftaran join vendor 
					on pendaftaran.id_vendor=vendor.id_vendor join lelang on pendaftaran.id_lelang=lelang.id_lelang") or die(mysql_error());		
					while($data=mysql_fetch_array($sql)){
				?>
						
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['nama_lelang']; ?></td>
					<td><?php echo $data['nama_vendor']; ?></td>
					<td><?php echo $data['pemilik']; ?></td>
					<td><?php echo $data['telepon']; ?></td>
					<td><?php echo $data['tgl_daftar']; ?></td>
					<td><?php echo '<a href="'.$data['file'].'">'.$data['nama_file'].'</a>' ?></td>
				</tr>
						
				<?php
					}
				?>
				
				</tbody>
              </table>
			  <a href="module/laporan/pdf/cetak_daftar.php" class="btn btn-success">Cetak Pendaftar</a>
			</div>
		</div>