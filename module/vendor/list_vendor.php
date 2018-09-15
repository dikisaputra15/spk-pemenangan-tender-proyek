<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel Vendor</h3>
    </div>
			
			<div class="box-body">
              <table class="table table-bordered table-hover" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Pemilik</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                </tr>
                </thead>
				<tbody>
                <?php
					$no=1;
					$sql=mysql_query("select * from vendor") or die(mysql_error());		
					while($data=mysql_fetch_array($sql)){
				?>
						
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['nama_vendor']; ?></td>
					<td><?php echo $data['pemilik']; ?></td>
					<td><?php echo $data['alamat']; ?></td>
					<td><?php echo $data['telepon']; ?></td>
				</tr>
						
				<?php
					}
				?>
				
				</tbody>
              </table>
			  <a href="?page=vendor&action=tambah_vendor" class="btn btn-success">+Tambah Vendor</a>
			</div>
		</div>