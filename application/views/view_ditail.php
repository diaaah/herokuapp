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
		<input class="btn btn-success navbar-btn" type="button" value="Home" onclick=location.href="<?php echo base_url();?>index.php/user/view_dashboard"></input>
		<input class="btn btn-success navbar-btn" id="lihat" type="button" value="Tambah data" onclick=location.href="<?php echo base_url();?>index.php/ditail_buku/view_formDitail">
	</div>
</nav>
<div class="container">
	<table class="table table-hover">
		<tr>
			<td>
				Id Detail
			</td>
			<td>
				Judul
			</td>
			<td>
				Kode
			</td>
			<td>
				Kondisi
			</td>
			<td>
				Action
			</td>
		</tr>
		<?php  
		foreach ($ditail as $value) {
			$id_det=$value->id_det_buku;
			$judul=$value->judul;
			$kode_buku=$value->kode_buku;
			$kondisi=$value->kondisi;
		?>
		<tr>
			<td>
				<?php echo $id_det; ?>
			</td>
			<td>
				<?php echo $judul; ?>
			</td>
			<td>
				<?php echo $kode_buku; ?>
			</td>
			<td>
				<?php echo $kondisi; ?>
			</td>
			<td>
				<input class="btn btn-primary" type="button" value="Edit" onclick=location.href="<?php echo base_url();?>index.php/ditail_buku/view_editDitail?id_ditail=<?php echo $id_det?>">
	            <input class="btn btn-danger" type="button" value="Delete" onclick='return deleteValidation(<?php echo $id_det;?>)'/>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</div>
<script type="text/javascript">
            function deleteValidation(id_ditail){
                $conf = confirm("Yakin?");
                if($conf){
                    location.href="<?php echo base_url();?>index.php/ditail_buku/hapus_ditail?id_ditail="+ id_ditail; 
                    return true;
                }
                return false;
            }
        </script>
</body>
</html>