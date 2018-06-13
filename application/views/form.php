<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
</head>
<body>
<div class="container">
	<form action="<?php echo base_url(); ?>index.php/member/insert" method="post">
		<div class="form-group">
			<input name="nama" placeholder="nama" class="form-control"></input>	
		</div>

		<div class="form-group">
			<input name="alamat" placeholder="alamat" class="form-control"></input>	
		</div>
		
		
		<input type="submit" name="submit" value="submit" class="btn btn-success"></input>
	</form>
</div>

</body>
</html>