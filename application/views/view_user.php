<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/body.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<input class="btn btn-primary navbar-btn" type="button" value="Home" onclick=location.href="<?php echo base_url();?>index.php/user/view_dashboard"></input>
		<input class="btn btn-success navbar-btn" id="lihat" type="button" value="Tambah Data" onclick=location.href="<?php echo base_url();?>index.php/user/view_formUser">
	</div>
</nav>
<div class="container">
	<table class="table table-hover">
		<tr>
			<td>
				ID
			</td>
			<td>
				Nama
			</td>
			<td>
				Alamat
			</td>
			<td>
				No Telepon
			</td>
			<td>
				Username
			</td>
			<td>
				Action
			</td>
		</tr>
		<?php  
		foreach ($user as $value) {
			$id=$value->id_user;
			$nama=$value->nama_user;
			$alamat=$value->alamat;
			$no_telp=$value->no_telp;
			$username=$value->username;
		?>
		<tr>
			<td>
				<?php echo $id; ?>
			</td>
			<td>
				<?php echo $nama; ?>
			</td>
			<td>
				<?php echo $alamat; ?>
			</td>
			<td>
				<?php echo $no_telp; ?>
			</td>
			<td>
				<?php echo $username; ?>
			</td>
			<td>
				<input class="btn btn-success" type="button" value="Edit" onclick=location.href="<?php echo base_url();?>index.php/user/view_edit_user?id_user=<?php echo $id?>">
	            <input class="btn btn-danger" type="button" value="Delete" onclick='return deleteValidation(<?php echo $id;?>)'/>
			</td>
		</tr>
		<?php
			}
		?>
	</table>
	 <script type="text/javascript">
            function deleteValidation(id_user){
                $conf = confirm("Yakin?");
                if($conf){
                    location.href="<?php echo base_url();?>index.php/user/hapus_user?id_user="+ id_user; 
                    return true;
                }
                return false;
            }
        </script>
</body>
</html>