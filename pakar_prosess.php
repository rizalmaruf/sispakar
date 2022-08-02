<?php
// koneksi database
include "4admin/koneksi.php";
// menangkap data yang di kirim dari form
$page = $_GET['page'];
$kode_page = $_GET['kode'];
if($page == 'proses_input'){
    if($kode_page == 'gejala'){
        $id = $_POST['kd_gejala'];
        $nama = $_POST['nm_gejala'];
        $sql_gejala = "SELECT * FROM gejala where kd_gejala='$id'";
        $qry_solusi1 = mysqli_query($koneksi,$sql_gejala);
        $data_cek = mysqli_num_rows($qry_solusi1);
        if($data_cek > 0){
            echo 'Kode Gejala Sudah Ada';
            return;
        }
        // update data ke database
        $sql_intmp = "INSERT INTO gejala (kd_gejala, nm_gejala) VALUES 
        ('$id','$nama')";
        mysqli_query($koneksi,$sql_intmp);
    }else{
        $id = $_POST['kd_penyakit'];
        $nama = $_POST['nm_penyakit'];
        $solusi = $_POST['solusi'];
        $definisi = $_POST['definisi'];
        $sql_solusi= "SELECT * FROM solusi where kd_penyakit='$id'";
        $qry_solusi= mysqli_query($koneksi,$sql_solusi);
        $data_cek = mysqli_num_rows($qry_solusi);
        if($data_cek > 0){
            echo 'Kode Penyakit Sudah Ada';
            return;
        }
        // update data ke database
        $sql_intmp = "INSERT INTO solusi (kd_penyakit, nm_penyakit, solusi, definisi) VALUES 
        ('$id','$nama','$solusi','$definisi')";
        mysqli_query($koneksi,$sql_intmp);
    }
}else{
    if($kode_page == 'gejala'){
        $id = $_POST['kd'];
        $kode = $_POST['kd_gejala'];
        $nama = $_POST['nm_gejala'];

        // update data ke database
        $sql_intmp = "UPDATE gejala SET kd_gejala='$kode',nm_gejala='$nama' where kd_gejala='$id'";
        mysqli_query($koneksi,$sql_intmp);
    }else{
        $id = $_POST['kd'];
        $kode = $_POST['kd_penyakit'];
        $nama = $_POST['nm_penyakit'];
        $solusi = $_POST['solusi'];
        $definisi = $_POST['definisi'];

        // update data ke database
        $sql_intmp = "UPDATE solusi SET kd_penyakit='$kode',nm_penyakit='$nama',solusi='$solusi',definisi='$definisi' where kd_penyakit='$id'";
        mysqli_query($koneksi,$sql_intmp);
    }
}
if($kode_page == 'gejala'){
    // mengalihkan halaman kembali ke List
    header('location:/sispakar51/index.php?page=list&kode=gejala');
}else{
    // mengalihkan halaman kembali ke List
    header('location:/sispakar51/index.php?page=list&kode=penyakit');
}
 
?>