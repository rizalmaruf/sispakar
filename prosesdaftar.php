<?php 
include "4admin/koneksi.php";
	
# Baca variabel Form (If Register Global ON)
$nama 	= $_REQUEST['nama'];
$kelamin 	= $_REQUEST['jk'];
$alamat 	= $_REQUEST['alamat'];
$no_telp= $_REQUEST['no_telp'];

# Validasi Form
if (trim($nama)=="") {
	include "konsultasi.php";
	echo "Nama belum diisi, ulangi kembali";
}
elseif (trim($alamat)=="") {
	include "konsultasi.php";
	echo "Alamat masih kosong, ulangi kembali";
}
elseif (trim($no_telp)=="") {
	include "konsultasi.php";
	echo "no_telp masih kosong, ulangi kembali";
}
else {
    $NOIP = $_SERVER['REMOTE_ADDR'];
	$sqldel = "DELETE FROM tmp_pasien WHERE noip='$NOIP'";
	mysqli_query($koneksi,$sqldel);

	$sql  = " INSERT INTO tmp_pasien (nama,kelamin,alamat,no_telp,noip,tanggal) 
		 	  VALUES ('$nama','$kelamin','$alamat','$no_telp','$NOIP',NOW())";
	mysqli_query($koneksi,$sql) 
		  or die ("SQL Error 2".mysql_error());
	
	$sqlhapus = "DELETE FROM tmp_solusi WHERE noip='$NOIP'";
	mysqli_query($koneksi,$sqlhapus) 
			or die ("SQL Error 1".mysql_error());
			
	$sqlhapus2 = "DELETE FROM tmp_analisa WHERE noip='$NOIP'";
	mysqli_query($koneksi,$sqlhapus2) 
			or die ("SQL Error 2".mysql_error());
			
	$sqlhapus3 = "DELETE FROM tmp_gejala WHERE noip='$NOIP'";
	mysqli_query($koneksi,$sqlhapus3) 
			or die ("SQL Error 3".mysql_error());
	
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=start'>";
}
?>
