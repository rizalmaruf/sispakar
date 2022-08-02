<?php
$page = (isset($_GET['page']))? $_GET['page'] : "welcome";
$id = (isset($_GET['id']));
if($page == 'input'||$page=='proses_input'||$page=='proses'||$page=='edit'||$page=='hapus'){
	if (!isset($_SESSION['username'])){
		header('location:/sispakar51/4admin/login.php');
	}
}
switch ($page) {
	case 'login': include "4admin/login.php"; break;
	case 'consultation': include "konsultasi.php"; break;
	case 'question'	: include "tanya.php"; break;
	case 'guest' : include "tanya.php"; break;
	case 'profil' : include "profil.php"; break;
	case 'contact' : include "kontak.php"; break;
	case 'start' : include "mulai.php"; break;
	case 'processreg' : include "prosesdaftar.php"; break;
	case 'processcon' : include "proseskonsul.php"; break;
	case 'result' : include "analisahasil.php"; break;
	case 'article' : include "artikel.php"; break;
	case 'read' : include "baca.php"; break;
	case 'input' : include "input_pakar.php"; break;
	case 'proses_input' : include "pakar_prosess.php"; break;
	case 'proses' : include "pakar_prosess.php"; break;
	case 'list' : include "list_diagnosa.php"; break;
	case 'edit' : include "crud_diagnosa.php"; break;
	case 'hapus' : include "crud_diagnosa.php"; break;
	case 'riwayat' : include "riwayat_konsul.php"; break;
	case 'news' : include "input_news.php"; break;
	//case 'reportresult' : include "lap.php"; break;
	case 'welcome' :
	default : include 'home.php';	
}
?>