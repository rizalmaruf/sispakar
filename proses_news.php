
<?php 
include "4admin/koneksi.php";
$tgl = date("Y-m-d");
$judul 	= $_REQUEST['judul'];
$isi 	= $_REQUEST['isi'];
$ket = $_REQUEST['ket'];
$keyword = $_REQUEST['keyword'];
$deskripsi = $_REQUEST['deskripsi'];
$url = $_REQUEST['url'];
if($_POST['upload']){
    $ekstensi_diperbolehkan	= array('png','jpg');
    $foto = $_FILES['file']['name'];
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];	

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, 'news/'.$foto);
            $sql = "INSERT INTO artikel VALUES('','','$tgl','$judul','$isi','$foto','$ket','$keyword','$deskripsi')";
            print_r($sql);
            $query = mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
            if($query){
                echo "<meta http-equiv='refresh' content='0; url=index.php?page=welcome'>";
            }else{
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        }else{
            echo 'UKURAN FILE TERLALU BESAR';
        }
    }else{
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
?>