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
            alert("Judul belum di isi");
            return false;
        }

        else if (penerbit == null || penerbit == "" ) {
            alert("Penerbit belum di isi");
            return false;
        }

        else if (pengarang == null || pengarang == "") {
            alert("Pengarang belum di isi");
            return false;
        }

        else if (halaman == null || halaman == "") {
            alert("Halaman belum di isi");
            return false;
        }

        else if (tahun== null || tahun== "" || isNaN(tahun)) {
            alert("Tahun terbit belum diisi");
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
<div class="container">
    <div class="jumbotron">
        <h2 align="center">FORM DETAIL BUKU</h2>
        <form name="form_input_data" method="POST" onsubmit='return validateForm()' action="<?php echo base_url();?>index.php/ditail_buku/insert_ditail">
        	<table width="500px" align="center">
                <tr>
                    <td><label class="col-md-12 control-label">Buku</label></td>
            		<td>
                            <select id="buku" name="id_buku" class="form-control">
                                <option>Pilih Buku</option>
                                <?php
                                    foreach ($buku as $value) {
                                    $id_buku=$value->id_buku;
                                    $judul=$value->judul;
                                ?>
                                <option value="<?php echo $id_buku; ?>"> <?php echo $judul; ?></option>    
                                <?php
                                }
                             ?>
                            </select>
                    </td>
                </tr>

        		<tr>
        			<td><label class="col-md-12 control-label">Kode Buku</label></td>
        			<td><input class="form-control" id="kode" type="text" name="kode"></td>
        		</tr>
                    <td><label class="col-md-12 control-label">Kondisi Buku</label></td>
                    <td><select id="kondisi" name="id_kondisi" class="form-control">
                            <option>pilih kondisi</option>
                            <?php  
                                foreach($kondisi as $value) {
                                $id_kondisi=$value->id_kondisi;
                                $kondisi=$value->kondisi;
                            ?>
                                <option value= "<?php echo $id_kondisi;?>"> <?php echo $kondisi; ?></option>    
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
                        <input class="btn btn-danger" type="button" name="submit" value="Batal" onclick=location.href="<?php echo base_url(); ?>index.php/ditail_buku/view_ditail">
                    </td>
                </tr>
        	</table>   
        </form>
    </div>
</div>
</body>
</html>