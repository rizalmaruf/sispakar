<?php
include "4admin/koneksi.php";

# Mendapatkan No IP Lokal
$NOIP = $_SERVER['REMOTE_ADDR'];
$id = $_GET['id'] ? $_GET['id'] : '';

# Perintah Ambil data analisa_hasil
$sql = "SELECT analisa_hasil.*, solusi.*
	FROM analisa_hasil,solusi
	WHERE solusi.kd_penyakit=analisa_hasil.kd_solusi
	AND analisa_hasil.noip='$NOIP'
	ORDER BY analisa_hasil.id DESC LIMIT 1";
$qry = mysqli_query($koneksi,$sql)
	or die ("Query Hasil salam".mysqli_error());
$data= mysqli_fetch_array($qry);

$sql2 = "SELECT * FROM tmp_pasien WHERE noip='$NOIP'";
$qry2 = mysqli_query($koneksi,$sql2)
	or die ("Query Hasil salam".mysqli_error());
$data2= mysqli_fetch_array($qry2);

# Membuat hasil Pria atau Wanita
if ($data2['kelamin']=="P") {
	$kelamin = "Pria";
}
else {
	$kelamin = "Wanita";
}
if($id)
{
	$sql = "SELECT ah.*, s.*
	FROM analisa_hasil ah
	join solusi s on s.kd_penyakit=ah.kd_solusi
	ORDER BY ah.id DESC";
	$qry = mysqli_query($koneksi,$sql)
	or die ("Query Hasil salam".mysqli_error());
	$data=mysqli_fetch_array($qry);
	$data2=$data;
	$kelamin=$data['kelamin'];
	if($kelamin =="L"){
		$kelamin = "Jantan";
	}else{
		$kelamin = "Betina";
	}
}
?>

<div class="panel panel-default">
  <div class="panel-body">
<table width="100%" border="0" cellpadding="2" cellspacing="1" class="table">
	<tr align="center" class="success">
		<td colspan="3">
		<font color="#d1ad2e"><b>HASIL DIAGNOSA PENYAKIT</b></font></td>
	</tr>
	<tr>
		<td colspan="3"><b>DATA PASIEN:</b></td>
	</tr>
	<tr>
		<td width="86">Nama </td><td> : </td>
		<td width="689"> <?php echo $data2['nama']; ?></td>
	</tr>
	<tr>
		<td>Kelamin </td><td> : </td>
		<td> <?php echo $kelamin; ?></td>
	</tr>
	<tr>
		<td>Alamat </td><td> : </td>
		<td> <?php echo $data2['alamat']; ?></td>
	</tr>
	<tr>
		<td>No Telepon </td><td> : </td>
		<td> <?php echo $data2['no_telp']; ?></td>
	</tr>
	</table>
    <table width="100%" border="0" cellpadding="2" cellspacing="1" class="table">
	<tr>
		<td colspan="2"><b>HASIL ANALISA TERAKHIR:</b></td>
	</tr>
	<tr>
		<td width="86">Penyakit </td>
		<td width="689"><?php echo $data['nm_penyakit']; ?></td>
	</tr>
	
	<tr>
		<td valign="top">Gejala</td>
		<td>
			<?php
		# Menampilkan Daftar Gejala
		$i = '';
	$sql_gejala = "SELECT gejala.* FROM gejala,rule
		WHERE gejala.kd_gejala=rule.kd_gejala
		AND rule.kd_solusi='$data[kd_solusi]' order by gejala.kd_gejala";
	$qry_gejala = mysqli_query($koneksi,$sql_gejala);
	while ($hsl_gejala=mysqli_fetch_array($qry_gejala)) {
	$i++;
		echo "$i . $hsl_gejala[nm_gejala] <br>";
	}
?>
		</td>
	</tr>
	<tr>
		<td valign="top">Definisi </td>
		<td><?php echo $data['definisi']; ?></td>
	</tr>
	<tr>
		<td valign="top">Solusi</td>
		<td><?php echo $data['solusi']; ?></td>
	</tr>
	<tr>
		<td colspan=2><a href="lap.php" class="btn btn-info" target="_blank"> Cetak Hasil Diagnosa</a></td>
	</tr>
	</table>

</div>
</div>
