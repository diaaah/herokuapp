<!DOCTYPE html>
<html>
<head>
    <title>Lihat Pengarang</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/body.css">
</head>
<body> 
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <input class="btn btn-success navbar-btn" type="button" value="Home" onclick=location.href="<?php echo base_url();?>index.php/user/view_dashboard"></input>
                <input class="btn btn-success navbar-btn" id="lihat" type="button" value="Tambah data" onclick=location.href="<?php echo base_url();?>index.php/pengarang/view_formPengarang"></input><br/>
            </div>
        </nav>

        <table class="table table-hover" align ="center">
            <tr> 
                <th>Nama</th>
                <th>Alamat</th>
                <th>No telepon</th>
                <th>Action</th>
            </tr>
                <?php
                    foreach ($pengarang as $value) {
                    $id=$value->id_pengarang;
                    $nama=$value->nama_pengarang;
                    $alamat=$value->alamat;
                    $no_telp=$value->telepon;
                ?>
            <tr>
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
                    <input class="btn btn-primary" type="button" value="Edit" onclick=location.href="<?php echo base_url();?>index.php/pengarang/view_edit_pengarang?id_pengarang=<?php echo $id?>">
                    <input  class="btn btn-danger" type="button" value="Delete" onclick='return deleteValidation(<?php echo $id;?>)'/>
                </td>
            </tr>
            <?php
            }
        ?>
        </table>
    </div>
    <script type="text/javascript">
            function deleteValidation(id_pengarang){
                $conf = confirm("Yakin?");
                if($conf){
                    location.href="<?php echo base_url();?>index.php/pengarang/hapus_pengarang?id_pengarang="+ id_pengarang; 
                    return true;
                }
                return false;
            }
        </script>
</body>
</html>