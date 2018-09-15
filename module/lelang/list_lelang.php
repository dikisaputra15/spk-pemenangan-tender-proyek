<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel Lelang Proyek</h3>
    </div>
			
			<div class="box-body">
              <table class="table table-bordered table-hover" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lelang</th>
                  <th>HPS</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
				<tbody>
                <?php
					$no=1;
					$sql=mysql_query("select * from lelang") or die(mysql_error());		
					while($data=mysql_fetch_array($sql)){
				?>
						
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['nama_lelang']; ?></td>
					<td><?php echo $data['hps']; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td>
						<ul style="list-style:none;">
							<li>
								<a href="?page=lelang&action=edit&id_lelang=<?php echo $data['id_lelang']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('yakin ingin menghapus data ?')"  href="?page=lelang&action=hapus&id_lelang=<?php echo $data['id_lelang']; ?>" title="Delete"><i class="fa fa-trash-o"></i></a>
							</li>
						</ul>
					</td>
				</tr>
						
				<?php
					}
				?>
				
				</tbody>
              </table>
			  <a href="?page=lelang&action=tambah_lelang" class="btn btn-success">+Tambah Lelang</a>
			</div>
		</div>