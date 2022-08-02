<?php
include "4admin/koneksi.php";
$page = $_GET['page'];
$id = $_GET['id'];
$kode = $_GET['kode'];
if($page == 'edit'){
	if($kode == 'gejala'){
		$sql_solusi= "SELECT * FROM gejala where kd_gejala='$id'";
		$qry_solusi= mysqli_query($koneksi,$sql_solusi);
		while($hsl_solusi=mysqli_fetch_array($qry_solusi)){
?>
		<div class="panel panel-default">
			<div class="panel-body">
				<form method="post" action="?page=proses&kode=gejala">
					<table class="table">
						<tr class="success">
							<td colspan="2" >Edit Gejala</td>
						</tr>
						<tr>
							<td >Kode Gejala</td>
							<td>
								<input class="form-control"  type="hidden" name="kd" value="<?php echo $hsl_solusi['kd_gejala']?>" placeholder="Isi Kode Gejala" />
								<input class="form-control"  type="text" name="kd_gejala" value="<?php echo $hsl_solusi['kd_gejala']?>" placeholder="Isi Kode Gejala" /></td>
						</tr>
						<tr>
							<td >Nama Gejala</td>
							<td><input class="form-control"  type="text" name="nm_gejala" value="<?php echo $hsl_solusi['nm_gejala']?>"  placeholder="Isi Nama Gejala"/></td>
						<tr>
							<td>&nbsp;</td><td>	<input type="submit" class="btn btn-success" name="daftar" value="Edit" />
												<input type="reset" class="btn btn-danger" name="reset" value="BATAL" />
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
<?php 	}
	}else{
		$sql_solusi= "SELECT * FROM solusi where kd_penyakit='$id'";
		$qry_solusi= mysqli_query($koneksi,$sql_solusi);
		while($hsl_solusi=mysqli_fetch_array($qry_solusi))
		{?>
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="?page=proses">
						<table class="table">
							<tr class="success">
								<td colspan="2" >Edit Solusi</td>
							</tr>
							<tr>
								<td >Kode Solusi</td>
								<td>
									<input class="form-control"  type="hidden" name="kd" value="<?php echo $hsl_solusi['kd_penyakit']?>" placeholder="Isi Kode Gejala" />
									<input class="form-control"  type="text" name="kd_penyakit" value="<?php echo $hsl_solusi['kd_penyakit']?>" placeholder="Isi Kode Gejala" /></td>
							</tr>
								<td >Nama Penyakit</td>
								<td><input class="form-control"  type="text" name="nm_penyakit" value="<?php echo $hsl_solusi['nm_penyakit']?>"  placeholder="Isi Nama Gejala"/></td>
							</tr>
							</tr>
								<td >Solusi</td>
								<td><input class="form-control"  type="text" name="solusi" value="<?php echo $hsl_solusi['solusi']?>"  placeholder="Isi Solusi"/></td>
							</tr>
							</tr>
								<td >Definisi</td>
								<td><input class="form-control"  type="text" name="definisi" value="<?php echo $hsl_solusi['definisi']?>"  placeholder="Isi Definisi"/></td>
							</tr>
								<td>&nbsp;</td><td>	<input type="submit" class="btn btn-success" name="daftar" value="Edit" />
													<input type="reset" class="btn btn-danger" name="reset" value="BATAL" />
								</td>
							</tr>
						</table>
					</form>

				</div>
			</div>
		<?php }
	}
}else{
	if($kode == 'gejala'){
		$sqldel = "DELETE FROM gejala WHERE kd_gejala='$id'";
		mysqli_query($koneksi,$sqldel);
		header('location:/sispakar51/index.php?page=list&kode=gejala');
	}else{
		$sqldel = "DELETE FROM solusi WHERE kd_penyakit='$id'";
		mysqli_query($koneksi,$sqldel);
		header('location:/sispakar51/index.php?page=list&kode=penyakit');
	}
}
?>