<?php
include "4admin/koneksi.php";
$kode = $_GET['kode'];
if($kode == 'gejala'){
?>
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="post" action="?page=proses_input&kode=gejala" >
				<table class="table">
					<tr class="success">
						<td colspan="2" style="background-color: #F1F1F1" >Form Input Gejala Sapi</td>
					</tr>
					<tr>
						<td >Kode Gejala</td>
						<td><input class="form-control"  type="text" name="kd_gejala" value="" placeholder="Isi Kode Gejala" /></td>
					</tr>
					<tr>
						<td >Nama Gejala</td>
						<td><input class="form-control"  type="text" name="nm_gejala" value="" placeholder="Isi Nama Gejala" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td><td>	<input type="submit" class="btn btn-success" name="daftar" style="background-color: #2BC17D " value="DAFTAR" />
											
											<input type="reset" class="btn btn-danger" name="reset" style="background-color: #F3623F" value="BATAL" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
<?php }else{ ?>
	<div class="panel panel-default">
		<div class="panel-body">
			<form method="post" action="?page=proses_input&kode=penyakit" >
				<table class="table">
					<tr class="success">
						<td colspan="2" style="background-color: #F1F1F1" >Form Input Solusi</td>
					</tr>
					<tr>
						<td >Kode Penyakit</td>
						<td><input class="form-control"  type="text" name="kd_penyakit" value="" placeholder="Isi Kode Penyakit" /></td>
					</tr>
					<tr>
						<td >Nama Penyakit</td>
						<td><input class="form-control"  type="text" name="nm_penyakit" value="" placeholder="Isi Nama Penyakit" /></td>
					</tr>
					<tr>
						<td >Solusi</td>
						<td><input class="form-control"  type="text" name="solusi" value="" placeholder="Solusi" /></td>
					</tr>
					<tr>
						<td >Definisi</td>
						<td><input class="form-control"  type="text" name="definisi" value="" placeholder="Definisi" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td><td>	<input type="submit" class="btn btn-success" name="daftar" style="background-color: #2BC17D " value="DAFTAR" value="DAFTAR"  />
											<input type="reset" class="btn btn-danger" name="reset" style="background-color: #F3623F" value="BATAL" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
<?php } ?>