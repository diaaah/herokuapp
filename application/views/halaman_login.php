
<!DOCTYPE html>
<html lang="en">
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
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="POST" action="<?php echo base_url();?>index.php/login/validasi_login">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control" name="username">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success"> Sign in </button>
          </form>
        </div>
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>Manajemen Perpustakaan</h1>
        <p>Manajemen Data Buku</p>
        <p><a class="btn btn-primary btn-lg" onclick=location.href="<?php echo base_url();?>index.php/login/view_formUser">Daftar</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
      </div>
      <hr>
      <footer>
        <p>&copy; 2016, Pemrograman Internet C.</p>
      </footer>
    </div> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
