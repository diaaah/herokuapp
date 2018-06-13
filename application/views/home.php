<!DOCTYPE html>
<html>
<head>
<title>HOME</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="body.css"
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        session_start();
    ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Welcome <?php echo $_SESSION['nama_admin'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST" action="logout.php">
            <button type="submit" class="btn btn-danger">logout</button>
          </form>
          <form class="navbar-form navbar-right" method="POST" action="edit_user.php">
            <button type="submit" class="btn btn-success">update data anda</button>
          </form>
        </div>
      </div>
    </nav>
    <hr>
    <div class="jumbotron">
      <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2>Masukan data pengarang</h2>
          <p><a class="btn btn-primary btn-lg" href="formulir_pengarang.php" role="button">Submit &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>masukan data penerbit</h2>
          <p><a class="btn btn-primary btn-lg" href="formulir_penerbit.php" role="button">submit &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>masukan data buku</h2>
          <p><a class="btn btn-primary btn-lg" href="formulir_buku.php" role="button">submit &raquo;</a></p>
        </div>

        <div class="row">
        <div class="col-md-4">
          <h2>lihat data pengarang</h2>
          <p><a class="btn btn-primary btn-lg" href="view_pengarang.php" role="button">submit &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>lihat data penerbit</h2>
          <p><a class="btn btn-primary btn-lg" href="view_penerbit.php" role="button">submit &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>lihat data buku</h2>
          <p><a class="btn btn-primary btn-lg" href="view_buku.php" role="button">submit &raquo;</a></p>
        </div>
      </div>
      </div>
    </div>
	
</form>
</body>
</html>