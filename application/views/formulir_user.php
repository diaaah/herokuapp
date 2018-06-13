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

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div id="navbar" class="container">
        <a class="navbar-brand">Register</a>
    </div>
 </nav>

<div class="jumbotron">
  	<div class="container">
		 <div class="form-group">
			<form method="post" class="navbar-form navbar-center" action="<?php echo base_url(); ?>index.php/login/insert_user" onsubmit='return validateForm()'>
			<br/>
			<br/>
			<br/>
			<br/>
				<table align="center">
					<tbody>
						<tr>
							<td class="navbar-brand" >Nama</td>
							<td>: <input id="nama" name="nama" type="text" class="form-control"></td>
						</tr>
						<tr>
							<td class="navbar-brand" >Alamat</td>
							<div class="col-sm-10">
							<td>: <input id="alamat" name="alamat" type="text" class="form-control"></td>
							</div>
						</tr>
						<tr>
							<td class="navbar-brand" >Telepon</td>
							<td>: <input id="no_telp" name="no_telp" type="text" class="form-control"></td>
						</tr>
						<tr>
							<td class="navbar-brand" >Username</td>
							<td>: <input id="username" name="username" type="text" class="form-control"></td>
						</tr>
						<tr>
							<td class="navbar-brand" >Password</td>
							<td>: <input id="password" name="password" type="password" class="form-control"></td>
						</tr>
						<tr>
							<td colspan="2" align="right"> 
							<input type="reset" value="Reset" class="btn btn-danger"> <input type="submit" value="Daftar" class="btn btn-primary"> </td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
</html>