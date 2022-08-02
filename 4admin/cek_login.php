<?php
// error_reporting(0);

//koneksi ke database
include "koneksi.php";
include "fungsi_injection.php";

$username = antiinjection($_POST['username']);
$password = antiinjection(md5($_POST['password']));
$level = antiinjection($_POST['level']);

// query untuk mendapatkan record dari username di table user
$query = $koneksi->query("SELECT * FROM admin WHERE nama ='$username' AND password ='$password' AND level ='$level'");
$data = $query->fetch_array();
// var_dump($level);
// var_dump($password);
// var_dump($level);
// var_dump($data['level']);exit;

// cek kesesuian password t_users
if (($password== $data['password']) AND ($username==$data['nama']) AND ($level==$data['level']))
	{
	// echo "<h1>Login Sukses</h1><p>";
	
	// menyimpan username kedalam SESSION
	session_start();
	$_SESSION['username'] = $data['nama'];
	$_SESSION['level'] = $data['level'];
	$data = true;
	?>
	
	<?php
	
	header('location:/sispakar51/index.php?page=input&kode=gejala');
	}

// username and password salah
else
	{
		$data = false;
		?>
	<script>
		window.localStorage.setItem($data);
	</script>
	<?php
	header('location:login.php?code=1');
	}

?>