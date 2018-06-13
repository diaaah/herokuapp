<!DOCTYPE html>
<html>
<head>
<title>form penerbit</title>
<script type="text/javascript">
	function validateForm() {
    var nama = document.getElementById("nama").value
    var alamat = document.getElementById("alamat").value
    var no_telp = document.getElementById("no_telp").value

    if (nama == null || nama == "") {
        alert("Nama belum di isi");
        return false;
    }

    else if (alamat == null || alamat == "") {
        alert("alamat belum di isi");
        return false;
    }

    else if (no_telp == null || no_telp== "" ||(no_telp.length!=12)) {
        alert("nomor telepon belum di isi atau salah");
        return false;
   }
    else {
        return true;
    }

}
</script>

<style> 
            body {
               font-family: arial, sans-serif; 
            }

            table {
                border-collapse: collapse;
                width: 50%;  
            }

            td, th {
                padding: 8px; 
            }

            input {
                font-size: 12pt;
                border: 1px solid #d0d0d0; 
                padding: 8px;   
            }

            /*Mengatur warna tombol*/
            .button {
                background-color: #c5c5c5;
                color: black;
                border: 0px;
            }
            .button:hover {
                background-color: #cfcfcf;
                color: black;
                border: 0px;
            }

            .button1 {
                background-color: #4caf50;
                color: white;
                border: 0px;
            }

            .button1:hover {
                background-color: #57c060;
                color: white;
                border: 0px;
            }
        </style>
</head>
<body>
<table bgcolor="#696969" height="100px" width="1300px" align="center" style="border:1px inset";>
	<tr><th><font size="12">login</th></font>
</table>
<br/>
<form name="form_input_data" method="POST" onsubmit="return validateForm()" action="cek_login.php" >
	<table width="500px" align="center">
		<tr>
			<td>User name</td>
			<td>: <input id="user_name" type="text" name="user_name" ></td><br>
		</tr>
		
		<tr>
			<td>Password</td>
			<td>: <input id="alamat" type="password" name="password" ></td><br>
		</t
			
	<table bgcolor="#696969" height="25px" width="700px" align="center" style="border:1px inset;">
		<tr align="center">
			<td><input type="submit" name="submit" value="Login"> </td>
            <td><input type="button" name="submit" value="daftar" onclick=location.href='form_daftar.php'> </td>
		</tr>
	</table>
	
</form>
</body>
</html>