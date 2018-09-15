<div class="box">
    <div class="box-header">
        <h3 class="box-title">Tabel User</h3>
    </div>
			
			<div class="box-body">
              <table class="table table-bordered table-hover" id="datatables">
                <thead>
                <tr>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
				<tbody>
                <?php
					$no=1;
					$sql=mysql_query("select * from user") or die(mysql_error());		
					while($data=mysql_fetch_array($sql)){
				?>
						
				<tr>
					<td><?php echo $data['nama_lengkap']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['username']; ?></td>
					<td><?php echo $data['level']; ?></td>
					<td><?php echo $data['status']; ?></td>
					<td>
						<ul style="list-style:none;">
							<li>
								<a href="?page=user&action=edit&user_id=<?php echo $data['user_id']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('yakin ingin menghapus data ?')"  href="?page=user&action=hapus&user_id=<?php echo $data['user_id']; ?>" title="Delete"><i class="fa fa-trash-o"></i></a>
							</li>
						</ul>
					</td>
				</tr>
						
				<?php
					}
				?>
				
				</tbody>
              </table>
			  <a href="?page=user&action=tambah_user" class="btn btn-success">+Tambah User</a>
			</div>
		</div>