<!DOCTYPE html>
<html>
<head>
<title>Edit Buku</title>
    <script type="text/javascript">
    	function validateForm(){
        var judul = document.getElementById("judul").value;
        var penerbit = document.getElementById("penrbit").value;
        var pengarang = document.getElementById("pengarang").value;
        var halaman= document.getElementById("halaman").value;
        var tahun = document.getElementById("tahun").value;

        if (judul == null || judul == "") {
            alert("Nama belum di isi");
            return false;
        }

        else if (penerbit == null || penerbit == "" ) {
            alert("email belum di isi atau salah");
            return false;
        }

        else if (pengarang == null || pengarang == "") {
            alert("alama belum di isi");
            return false;
        }

        else if (halaman == null || halaman == "") {
            alert("nomor telepon belum di isi atau salah");
            return false;
        }

        else if (tahun== null || tahun== "" || isNaN(tahun)) {
            alert("jenis kelamin belum diisi");
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
<?php
    $id_buku=$buku['id_buku'];
    $id_penerbit=$buku['id_penerbit'];
    $id_pengarang=$buku['id_pengarang'];
    $add_by=$buku['add_by'];
    $judul=$buku['judul'];
    $th_terbit=$buku['tahun_terbit'];
    $jumlah_halaman=$buku['jumlah_halaman'];
    $nama_penerbit=$buku['nama_penerbit'];
    $nama_pengarang=$buku['nama_pengarang'];
    $nama_user=$buku['nama_user'];
?>

<body>
    <div class="container">
        <div class="jumbotron">
            <h2 align="center">EDIT BUKU</h2>
            <form name="form_input_data" method="POST" onsubmit='return validateForm()' action="<?php echo base_url();?>index.php/buku/edit_buku">
            	<table width="500px" align="center">
                    <input type="hidden" value=" <?php echo $id_buku;?>" name="id_buku">
            		<tr>
            			<td><label class="col-md-12 control-label">Judul</label></td>
            			<td><input class="form-control" id="judul" type="text" name="judul" value= "<?php echo $judul;?>"></td><br>
            		</tr>
                    <tr>
                    <td><label class="col-md-12 control-label">Penerbit</label></td>
            		<td>
                                <select id="penerbit" name="penerbit" class="btn btn-default dropdown-toggle col-md-12">
                                <option value="<?php echo $id_penerbit?>"><?php echo $nama_penerbit;?></option>
                                <?php
                                    foreach($penerbit as $value){
                                    $id_penerbit=$value->id_penerbit;
                                    $nama_penerbit=$value->nama_penerbit;
                                ?>
                                    <option value="<?php echo $id_penerbit?>"> <?php echo $nama_penerbit?></option>
                                <?php       
                                    }
                                ?>
                            </select>
                    </td>
                    </tr>

                    <tr>
                    <td><label class="col-md-12 control-label">Pengarang</label></td>
            		<td> 
                        <select id="pengarang" name="pengarang" class="btn btn-default dropdown-toggle col-md-12">
                            <option value="<?php echo $id_pengarang?>"><?php echo $nama_pengarang;?></option>
                            <?php
                                 foreach ($pengarang as $value) {
                                $id_pengarang=$value->id_pengarang;
                                $nama_pengarang=$value->nama_pengarang;
                            ?>
                                <option value="<?php echo $id_pengarang?>"><?php echo $nama_pengarang?></option>
                            <?php       
                                }
                            ?>
                        </select>
                    </td>
                    </tr>

            		<tr>
            			<td><label class="col-md-12 control-label">Jumlah halaman</label></td>
            			<td><input class="form-control" id="halaman" type="text" name="halaman" value= "<?php echo $jumlah_halaman?>"></td><br>
            		</tr>

                    <tr>
                        <td><label class="col-md-12 control-label">Tahun Terbit</label></td>
                        <td><input class="form-control" id="tahun" type="text" name="tahun" value= "<?php echo $th_terbit?>"></td><br>
                    </tr>
                    
                    <tr>
                        <td><label class="col-md-12 control-label">Nama Admin</label></td>
                        <td>
                            <select id="addby" name="addby" class="btn btn-default dropdown-toggle col-md-12">
                            <option value="<?php echo $add_by?>"><?php echo $nama_user?></option>
                                <?php  
                                    foreach($user as $value) {
                                    $id_user=$value->id_user;
                                    $nama_user=$value->nama_user;
                                ?>
                                    <option value= "<?php echo $id_user; ?>"> <?php echo $nama_user; ?></option>    
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                       <td><label class="col-md-12 control-label"></label></td>
                       <td align="right"><input class="btn btn-success" type="submit" name="submit" value="Simpan"></td>
                   </tr>
        	   </table>
            </form>
        </div>
    </div>
</body>
</html>