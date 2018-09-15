<div class="box">
    <div class="box-header">
        <h3 class="box-title">Laporan Nilai Peserta Lelang Proyek</h3>
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
                  <th>Total Poin</th>
                  <th>Nilai</th>
                </tr>
                </thead>
				<tbody>
                <?php
					$no=1;
					$sql=mysql_query("select penilaian.appk,penilaian.situ,penilaian.siup,penilaian.tdp,penilaian.ktp_pemilik,
					penilaian.npwp_perusahaan, penilaian.norek_perusahaan,penilaian.skt,penilaian.skdp,penilaian.nsfp,penilaian.ka,
					penilaian.k_bank, vendor.nama_vendor,vendor.pemilik,vendor.telepon, lelang.nama_lelang,lelang.hps from penilaian join
					vendor on penilaian.id_vendor=vendor.id_vendor join lelang on penilaian.id_lelang=lelang.id_lelang ") or die(mysql_error());		
					while($data=mysql_fetch_array($sql)){
					
					$a = $data['appk'];
					$b = $data['situ'];
					$c = $data['siup'];
					$d = $data['tdp'];
					$e = $data['ktp_pemilik'];
					$f = $data['npwp_perusahaan'];
					$g = $data['norek_perusahaan'];
					$h = $data['skt'];
					$i = $data['skdp'];
					$j = $data['nsfp'];
					$k = $data['ka'];
					$l = $data['k_bank'];
					$hps = $data['hps'];
					$total = $a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l;
					$benefit = $hps * $total/30;
					$nilai = $benefit/$hps;
				?>
						
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $data['nama_lelang']; ?></td>
					<td><?php echo $data['nama_vendor']; ?></td>
					<td><?php echo $data['pemilik']; ?></td>
					<td><?php echo $data['telepon']; ?></td>
					<td><?php echo $total; ?></td>
					<td><?php echo $nilai; ?></td>
				</tr>
				
				<?php
					}
				?>
				
				</tbody>
              </table>
			  <a href="module/laporan/pdf/cetak_pemenang.php" class="btn btn-success">Cetak Pemenang</a>
			</div>
		</div>