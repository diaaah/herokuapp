<!DOCTYPE html>
<html>
<head>
    <title>Edit penerbit</title>
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
            alert("alama belum di isi");
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

     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/body.css">
<body>
<?php
    $id=$penerbit['id_penerbit'];
    $nama=$penerbit['nama_penerbit'];
    $alamat=$penerbit['alamat'];
    $no_telp=$penerbit['telepon'];
?>
<div class="container">
    <div class="jumbotron">
        <h2 align="center">EDIT PENERBIT</h2>
        <form name="form_input_data" method="POST" onsubmit="return validateForm()" action="<?php echo base_url();?>index.php/penerbit/edit_penerbit">
        	<table align="center">
            <input type="hidden" value=" <?php echo $id;?> " name="id_penerbit">
        		<tr>
        			<td><label class="col-md-12 control-label">Nama</label></td>
        			<td><input class="form-control" id="nama" type="text" name="nama" value="<?php echo $nama;?>"></td><br>
        		</tr>
        		
        		<tr>
        			<td><label class="col-md-12 control-label">Alamat</label></td>
        			<td><input class="form-control" id="alamat" type="text" name="alamat" value="<?php echo $alamat;?>"></td><br>
        		</tr>
        		<tr>
        			<td><label class="col-md-12 control-label">No Telp</label></td>
        			<td><input class="form-control" id="no_telp" type="text" name="no_telp" value="<?php echo $no_telp;?>"></td><br>
        		</tr>
        		<tr>
                    <td></td>
                    <td align="right"><input class="btn btn-success" type="submit" name="submit" value="Simpan"> </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>