<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Pakar Sapi</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="cow.png" />
  </head>
<body>

    <div class="navbar navbar-inverse navbar-static-top" role="navigation" style="background-color: #F1F1F1;">
       <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          </button>
          <a class="navbar-brand" href="#">Sistem Pakar Sapi</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="?page=welcome">Home</a></li>
            <li><a href="?page=profil">Profil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=consultation">Konsultasi</a></li>
                <li><a href="?page=article">Artikel Kesehatan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">List Pakar<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=list&kode=gejala">List Gejala</a></li>
                <li><a href="?page=list&kode=solusi">List Solusi</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Input Pakar<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=input&kode=gejala">Input Gejala</a></li>
                <li><a href="?page=input&kode=solusi">Input Solusi</a></li>
              </ul>
            </li>
            <li><a href="?page=riwayat">Riwayat</a></li>
            <li><a href="?page=news">Input Berita</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="4admin/logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>