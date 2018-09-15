<div class="col-md-4">
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Rincian Lelang Proyek</h3>
    </div>
			
			<div class="box-body">
              <table class="table table-bordered table-hover">
				<tbody>
                <?php
					$no=1;
					$sql=mysql_query("select * from lelang where status='on'") or die(mysql_error());		
					while($data=mysql_fetch_array($sql)){
				?>
						
				<tr>
					<td>No</td>
					<td><?php echo $no++ ?></td>
				</tr>
				<tr>
					<td>Nama Lelang</td>
					<td><?php echo $data['nama_lelang']; ?></td>
				</tr>
				<tr>
					<td>Harga Perkiraan Sendiri (HPS)</td>
					<td><?php echo $data['hps']; ?></td>
				</tr>
						
				<?php
					}
				?>
				
				</tbody>
              </table>
			</div>
		</div>
</div>
<div class="col-md-12">
 <a href="?page=pendaftaran&action=daftar_lelang" class="btn btn-success">+Daftar Lelang Proyek</a>
</div>