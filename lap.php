<?php
include "4admin/koneksi.php";

# Mendapatkan No IP Lokal
$NOIP = $_SERVER['REMOTE_ADDR'];

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
?>


<body onload="window.print();" Layout="Portrait">

<table width="100%" border="0" cellpadding="3" cellspacing="1">
	<tr align="center">
		<td colspan="3">
		<font color="#d1ad2e"><b>HASIL DIAGNOSA PENYAKIT SAPI</b></font><hr color="#d1ad2e" ></td>
	</tr>
	<tr>
		<td colspan="3"><b>DATA Peternak:</b></td>
	</tr>
	<tr>
		<td width="86">Nama Peternak</td><td> : </td>
		<td width="689"> <?php echo $data2['nama']; ?></td>
	</tr>
	<tr>
		<td>Kelamin Sapi </td><td> : </td>
		<td> <?php echo $kelamin; ?></td>
	</tr>
	<tr>
		<td>Alamat </td><td> : </td>
		<td> <?php echo $data2['alamat']; ?></td>
	</tr>
	<tr>
		<td>No Telpon</td><td> : </td>
		<td> <?php echo $data2['no_telp']; ?></td>
	</tr>
	</table>
	<table width="100%" border="0" cellpadding="2" cellspacing="1">
	<tr>
		<td colspan="2"><b>HASIL ANALISA TERAKHIR:</b></td>
	</tr>
	<tr>
		<td width="86">Penyakit </td>
		<td width="689"><?php echo $data['nm_penyakit']; ?></td>
	</tr>

	<tr>
		<td valign="top">Gejala </td>
		<td>
		<?php
		# Menampilkan Daftar Gejala
		$i='';
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


</table>

</body>
