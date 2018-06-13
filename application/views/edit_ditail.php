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
</head>
<body>
<?php
    $id_det=$ditail['id_det_buku'];
    $id_buku=$ditail['id_buku'];
    $id_kondisi=$ditail['id_kondisi'];
    $judul=$ditail['judul'];
    $kode=$ditail['kode_buku'];
    $kondisi=$ditail['kondisi'];
?>
<div class="container">
    <div class="jumbotron">
        <h2 align="center">FORM EDIT DETAIL</h2> 
        <form name="form_input_data" method="POST" onsubmit="return validateForm()" action="<?php echo base_url();?>index.php/ditail_buku/edit_ditail">
        	<table width="500px" align="center">
            <input type="hidden" value=" <?php echo $id_det;?> " name="id_ditail">
        		<tr>
        			<td><label class="col-md-12 control-label">Buku</label></td>
        			<td>
                        <select id="buku" name="id_buku" class="form-control">
                            <option value="<?php echo $id_buku?>"><?php echo $judul;?></option>
                            <?php
                                 foreach ($buku as $value) {
                                $id_buku=$value->id_buku;
                                $judul=$value->judul;
                            ?>
                                <option value="<?php echo $id_buku?>"><?php echo $judul?></option>
                            <?php       
                                }
                            ?>
                        </select>
                    </td>
        		</tr>
        		
        		<tr>
        			<td><label class="col-md-12 control-label">Kode</label></td>
        			<td><input class="form-control" id="kode" type="text" name="kode" value="<?php echo $kode;?>"></td><br>
        		</tr>
        		<tr>
        			<td><label class="col-md-12 control-label">Kondisi</label></td>
        			<td>
                        <select id="kondisi" name="id_kondisi" class="form-control">
                            <option value="<?php echo $id_kondisi?>"><?php echo $kondisi?></option>
                            <?php  
                                foreach($kondisi_a as $value) {
                                $id_kondisi=$value->id_kondisi;
                                $kondisi=$value->kondisi;
                            ?>
                                <option value= "<?php echo $id_kondisi;?>"> <?php echo $kondisi; ?></option>    
                            <?php
                            }
                         ?>
                        </select>
                    </td><br>
        		</tr>

        		<tr align="center">
                    <td></td>
        			<td align="right"><input class="btn btn-success" type="submit" name="submit" value="Simpan"> </td>
        		</tr>    
            </table>
        </form>
    </div>
</div>
</body>
</html>