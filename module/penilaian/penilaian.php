<?php

include "koneksi.php"; 

?>
 <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Penilaian</h3>
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
							<label for="exampleinputappk">Akta Pendirian Persekutuan Komanditer</label>
							<div>
								<input type="radio" name="appk" id="opsi1" value="1" required> 1
								<input type="radio" name="appk" id="opsi2" value="2" required> 2
								<input type="radio" name="appk" id="opsi3" value="3" required> 3
								<input type="radio" name="appk" id="opsi4" value="4" required> 4
								<input type="radio" name="appk" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputsitu">Surat Izin Tempat Usaha</label>
							<div>
								<input type="radio" name="situ" id="opsi1" value="1" required> 1
								<input type="radio" name="situ" id="opsi2" value="2" required> 2
								<input type="radio" name="situ" id="opsi3" value="3" required> 3
								<input type="radio" name="situ" id="opsi4" value="4" required> 4
								<input type="radio" name="situ" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputsiup">Surat Izin Usaha Perdagangan</label>
							<div>
								<input type="radio" name="siup" id="opsi1" value="1" required> 1
								<input type="radio" name="siup" id="opsi2" value="2" required> 2
								<input type="radio" name="siup" id="opsi3" value="3" required> 3
								<input type="radio" name="siup" id="opsi4" value="4" required> 4
								<input type="radio" name="siup" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputtdp">Tanda Daftar Perusahaan</label>
							<div>
								<input type="radio" name="tdp" id="opsi1" value="1" required> 1
								<input type="radio" name="tdp" id="opsi2" value="2" required> 2
								<input type="radio" name="tdp" id="opsi3" value="3" required> 3
								<input type="radio" name="tdp" id="opsi4" value="4" required> 4
								<input type="radio" name="tdp" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputktp">KTP Pemilik</label>
							<div>
								<input type="radio" name="ktp_pemilik" id="opsi1" value="1" required> 1
								<input type="radio" name="ktp_pemilik" id="opsi2" value="2" required> 2
								<input type="radio" name="ktp_pemilik" id="opsi3" value="3" required> 3
								<input type="radio" name="ktp_pemilik" id="opsi4" value="4" required> 4
								<input type="radio" name="ktp_pemilik" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputnpwp">NPWP Perusahaan</label>
							<div>
								<input type="radio" name="npwp_perusahaan" id="opsi1" value="1" required> 1
								<input type="radio" name="npwp_perusahaan" id="opsi2" value="2" required> 2
								<input type="radio" name="npwp_perusahaan" id="opsi3" value="3" required> 3
								<input type="radio" name="npwp_perusahaan" id="opsi4" value="4" required> 4
								<input type="radio" name="npwp_perusahaan" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputnorek">Nomor Rekening Perusahaan</label>
							<div>
								<input type="radio" name="norek_perusahaan" id="opsi1" value="1" required> 1
								<input type="radio" name="norek_perusahaan" id="opsi2" value="2" required> 2
								<input type="radio" name="norek_perusahaan" id="opsi3" value="3" required> 3
								<input type="radio" name="norek_perusahaan" id="opsi4" value="4" required> 4
								<input type="radio" name="norek_perusahaan" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputskt">Surat Keterangan Terdaftar</label>
							<div>
								<input type="radio" name="skt" id="opsi1" value="1" required> 1
								<input type="radio" name="skt" id="opsi2" value="2" required> 2
								<input type="radio" name="skt" id="opsi3" value="3" required> 3
								<input type="radio" name="skt" id="opsi4" value="4" required> 4
								<input type="radio" name="skt" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputskdp">Surat Keterangan Domisili Perusahaan</label>
							<div>
								<input type="radio" name="skdp" id="opsi1" value="1" required> 1
								<input type="radio" name="skdp" id="opsi2" value="2" required> 2
								<input type="radio" name="skdp" id="opsi3" value="3" required> 3
								<input type="radio" name="skdp" id="opsi4" value="4" required> 4
								<input type="radio" name="skdp" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputnsfp">Nomor Sah Faktur Pajak</label>
							<div>
								<input type="radio" name="nsfp" id="opsi1" value="1" required> 1
								<input type="radio" name="nsfp" id="opsi2" value="2" required> 2
								<input type="radio" name="nsfp" id="opsi3" value="3" required> 3
								<input type="radio" name="nsfp" id="opsi4" value="4" required> 4
								<input type="radio" name="nsfp" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputka">Kode Aktivasi</label>
							<div>
								<input type="radio" name="ka" id="opsi1" value="1" required> 1
								<input type="radio" name="ka" id="opsi2" value="2" required> 2
								<input type="radio" name="ka" id="opsi3" value="3" required> 3
								<input type="radio" name="ka" id="opsi4" value="4" required> 4
								<input type="radio" name="ka" id="opsi5" value="5" required> 5
							</div>
						</div>
						<div class="form-group">
							<label for="exampleinputkbank">Keterangan Bank</label>
							<div>
								<input type="radio" name="k_bank" id="opsi1" value="1" required> 1
								<input type="radio" name="k_bank" id="opsi2" value="2" required> 2
								<input type="radio" name="k_bank" id="opsi3" value="3" required> 3
								<input type="radio" name="k_bank" id="opsi4" value="4" required> 4
								<input type="radio" name="k_bank" id="opsi5" value="5" required> 5
							</div>
						</div>
						
					</div>
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    </form>
            </div>
	</div>
</div>

<?php
	$vendor=@$_POST['id_vendor'];
	$lelang=@$_POST['id_lelang'];
	$appk=@$_POST['appk'];
	$situ =@$_POST['situ'];
	$siup =@$_POST['siup'];
	$tdp =@$_POST['tdp'];
	$ktp =@$_POST['ktp_pemilik'];
	$npwp =@$_POST['npwp_perusahaan'];
	$norek =@$_POST['norek_perusahaan'];
	$skt =@$_POST['skt'];
	$skdp =@$_POST['skdp'];
	$nsfp =@$_POST['nsfp'];
	$ka =@$_POST['ka'];
	$k_bank =@$_POST['k_bank'];
	$simpan =@$_POST['simpan'];
				
		if(@$simpan){
			mysql_query("insert into penilaian values('', '$vendor', '$lelang', '$appk', '$situ', '$siup', '$tdp',
			'$ktp', '$npwp', '$norek', '$skt', '$skdp', '$nsfp', '$ka', '$k_bank')") or die(mysql_error());
			?>
				<script type="text/javascript"> alert("penilaian berhasil");
					window.location.href="../spktender/halaman_utama.php?page=penilaian";
				</script>
			<?php
		}
?>

