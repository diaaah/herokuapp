<!DOCTYPE html>
<html>
<head>
    <title>form Buku</title>
    <script type="text/javascript">
    	function validateForm(){
        var judul = document.getElementById("judul").value;
        var penerbit = document.getElementById("penrbit").value;
        var pengarang = document.getElementById("pengarang").value;
        var halaman= document.getElementById("halaman").value;
        var tahun = document.getElementById("tahun").value;

        if (judul == null || judul == "") {
            alert("Judul belum diisi");
            return false;
        }

        else if (penerbit == null || penerbit == "" ) {
            alert("Penerbit belum diisi");
            return false;
        }

        else if (pengarang == null || pengarang == "") {
            alert("pengarang belum diisi");
            return false;
        }

        else if (halaman == null || halaman == "") {
            alert("halaman belum di isi");
            return false;
        }

        else if (tahun== null || tahun== "" || isNaN(tahun)) {
            alert("tahun belum diisi");
            return false;
        }

        else {
            return true;
        }

    }
    </script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/body.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/modal.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h2 align="center">FORMULIR BUKU</h2>
            <form name="form_input_data" method="POST" onsubmit='return validateForm()' action="<?php echo base_url();?>index.php/buku/insert_buku">
            	<table align="center">
                    <tr>
                        <td><label class="col-md-12 control-label">Judul</label></td>
                        <td><input class="form-control" type="text" id="judul" name="judul"></td>
                    </tr>
                    <tr>
                    <td><label class="col-md-12 control-label">Pengarang</label></td>
            		<td>
                            <select id="pengarang" name="pengarang" class="form-control">
                                <option>Pilih Pengarang</option>
                                <?php
                                    foreach ($pengarang as $value) {
                                    $id=$value->id_pengarang;
                                    $nama=$value->nama_pengarang;
                                ?>
                                    <option value="<?php echo $id; ?>"> <?php echo $nama; ?></option>    
                                <?php
                                }
                             ?>
                            </select>
                    </td>
                    </tr>
                     <tr>
                    <td><label class="col-md-12 control-label">Penerbit</label></td>
                    <td> 
                            <select id="penerbit" name="penerbit" class="form-control">
                                <option>Pilih Penerbit</option>
                                <?php  
                                    foreach($penerbit as $value) {
                                    $id_penerbit=$value->id_penerbit;
                                    $nama_penerbit=$value->nama_penerbit;
                                ?>
                                    <option value= "<?php echo $id_penerbit; ?>"> <?php echo $nama_penerbit; ?></option>    
                                <?php
                                }
                             ?>
                            </select>
                    </td>
                    </tr>

            		<tr>
            			<td><label class="col-md-12 control-label">Jumlah Halaman</label></td>
            			<td><input class="form-control" id="halaman" type="text" name="halaman" ></td><br>
            		</tr>

                    <tr>
                        <td><label class="col-md-12 control-label">Tahun Terbit</label></td>
                        <td><input class="form-control" id="tahun" type="text" name="tahun" ></td><br>
                    </tr>
                    <tr>
                        <td><label class="col-md-12 control-label">Nama Admin</label></td>
                        <td>
                            <select id="addby" name="addby" class="form-control">
                                <option>Pilih Admin</option>
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
                        <td></td>
                        <td align="right">
                            <input class="btn btn-success" type="submit" name="submit" value="Simpan"> 
                            <input class="btn btn-danger" type="button" name="submit" value="Batal" onclick=onclick=location.href="<?php echo base_url(); ?>index.php/buku/view_buku">
                        </td>
                    </tr>
            	</table>

            	<table align="right">
                <tr>
                	
                </tr>
                <table>
            </form>
        </div>
    </div>
</body>
</html>