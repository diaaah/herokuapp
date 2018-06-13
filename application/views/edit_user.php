<html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
<script type="text/javascript">
    function validateForm() {
    var nama = document.getElementById("nama").value;
    var alamat = document.getElementById("alamat").value;
    var no_telp = document.getElementById("no_telp").value;
    var user = document.getElementById("username").value;
    var pass = document.getElementById("password").value;

    if (nama == null || nama == "") {
        alert("Nama belum di isi");
        return false;
    }
    else if (alamat == null || alamat == "") {
            alert("alamat belum di isi");
            return false;
    }
    else if (no_telp == null || no_telp== "" ||(no_telp.length<11)) {
            alert("nomor telepon belum di isi atau salah");
            return false;
   }
   else if (user == null || user== "") {
            alert("username belum diisi");
            return false;
    }

    else if (pass == null || pass== "" ||(pass.length<6)) {
            alert("Password minimal 6 karakter");
            return false;
    }
    
    else {
        return true;
    }

}
</script>
<?php 
    $id=$user['id_user'];
    $nama=$user['nama_user'];
    $alamat=$user['alamat'];
    $no_telp=$user['no_telp'];
    $username=$user['username'];

?>
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div id="navbar" class="container">
        <a class="navbar-brand">Edit Data</a>
        </div>
 </nav>
<div class="jumbotron">
  	<div class="container">
		 <div class="form-group">
			<form method="post" class="navbar-form navbar-center" action="<?php echo base_url(); ?>index.php/user/edit_user" onsubmit="return validateForm()">
			<br/>
			<br/>
			<br/>
			<br/>
				<table align="center">
					<tbody>
                        <input type="hidden" name="id_user" value="<?php echo $id; ?>">
						<tr>
							<td class="navbar-brand" >Nama</td>
							<td>: <input id="nama" name="nama" type="text" class="form-control" value="<?php echo $nama;?>"></td>
						</tr>
						<tr>
							<td class="navbar-brand" >alamat</td>
							<div class="col-sm-10">
							<td>: <input id="alamat" name="alamat" type="text" class="form-control" value="<?php echo $alamat;?>"></td>
							</div>
						</tr>
						<tr>
							<td class="navbar-brand" >No telepon</td>
							<td>: <input id="no_telp" name="no_telp" type="text" class="form-control" value="<?php echo $no_telp;?>"></td>
						</tr>
						<tr>
							<td class="navbar-brand" >Username</td>
							<td>: <input id="username" name="username" type="text" class="form-control" value="<?php echo $username?>"></td>
						</tr>
						<tr>
							<td class="navbar-brand" >Password</td>
							<td>: <input id="password" name="password" type="password" class="form-control" placeholder="password baru"></td>
						</tr>
						<tr>
							<td colspan="2" align="right"> 
							<input type="submit" value="Simpan" class="btn btn-success">
                            <input type="button" value="Batal" class="btn btn-danger" onclick=location.href="<?php echo base_url(); ?>index.php/user/view_user">
                            </td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
</html>