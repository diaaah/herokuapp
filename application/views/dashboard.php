<html>
<title></title>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/modal.js"></script> 
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/dropdown.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" >
<br/>
  <div class="container-fluid">
    <div class="container">

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Buku<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url(); ?>index.php/buku/view_buku">Lihat Data Buku</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/buku/view_formBuku">Tambah Data Buku</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Penerbit<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url(); ?>index.php/penerbit/view_penerbit" >Lihat Data Penerbit</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/penerbit/view_formPenerbit">Tambah Data Penerbit</a></li>
            </ul>
          </li>
           <li class="dropdown">
            <a href="#" size="100" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pengarang<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url(); ?>index.php/pengarang/view_pengarang">Lihat Data Pengarang</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/pengarang/view_formPengarang">Tambah Data Pengarang</a></li>
            </ul>
          </li>
           <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url(); ?>index.php/user/view_user">Lihat Data Member</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/user/view_formUser">Tambah Data Member</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Detail Buku<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url(); ?>index.php/ditail_buku/view_ditail">Lihat Detail buku</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/ditail_buku/view_formDitail">Tambah Detail buku</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <button type="button" class="btn btn-danger" onclick=location.href="<?php echo base_url(); ?>index.php/user/logout">Logout</button>
        </ul>
      <div class="container">
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br/>
<br/>
<div class="jumbotron">
      <div class="container">
        <h1>Selamat Datang</h1>
        <p>Manajemen Data ruang baca</p>
      </div>
    </div>
  <br/>
</body>
</body>
</html>