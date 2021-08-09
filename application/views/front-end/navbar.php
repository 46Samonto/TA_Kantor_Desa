
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?=base_url('asset/beranda/');?>css/materialize.min.css"  media="screen,projection"/>

    <!-- my CSS -->
    <link rel="stylesheet" href="<?=base_url('asset/beranda/');?>css/style.css">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title><?= $title ?></title>
  </head>

  <body id="home" class="scrollspy">

    <!-- navbar -->
    <div class="navbar-fixed">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
      </ul>
      <nav class="indigo darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <img src="<?=base_url('asset/beranda/img/Logo.png');?>" haight="70px" width="50px" style="margin-top: 10px;">
            <a href="#home" class="brand-logo">DESA MELAYU</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#beranda">Beranda</a></li>
              <li><a href="<?//=base_url('utama/profil_desa');?>">Info Profil</a></li>
              <li><a href="#organisasi">Info Organisasi</a></li>
              <li><a href="#dades">Info Data Desa</a></li>
              <li><a href="#layanan">Info Layanan</a></li>
              <li><a href="#!">Masuk</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="#beranda">Beranda</a></li>
      <li><a href="<?//=base_url('utama/profil_desa');?>">Info Profil</a></li>
      <li><a href="#organisasi">Info Organisasi</a></li>
      <li><a href="#dades">Info Data Desa</a></li>
      <li><a href="#layanan">Info Layanan</a></li>
      <li><a href="#!">Masuk</a></li>
    </ul>
