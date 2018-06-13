<html>
<head>
<title>Lihat Penerbit</title>
<html>
    <head>
      <title>Penerbit</title> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/body.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/modal.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <input class="btn btn-success navbar-btn" type="button" name="data_baru" value="Home" onclick=location.href="<?php echo base_url();?>index.php/user/view_dashboard">
                <input class="btn btn-success navbar-btn" id="lihat" type="button" name="lihat_data" value="Tambah data" onclick=location.href="<?php echo base_url();?>index.php/penerbit/view_formPenerbit">
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
                    foreach ($penerbit as $value) {
                    $id=$value->id_penerbit;
                    $nama=$value->nama_penerbit;
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
                    <input class="btn btn-primary" type="button" value="Edit" onclick=location.href="<?php echo base_url();?>index.php/penerbit/view_edit_penerbit?id_penerbit=<?php echo $id?>">
                    <input class="btn btn-danger" type="button" value="Delete" onclick='return deleteValidation(<?php echo $id;?>)'/>
                </td>
            </tr>
            <?php
            }
            ?>
            </table>
    </div>
    <script type="text/javascript">
            function deleteValidation(id_penerbit){
                $conf = confirm("Yakin?");
                if($conf){
                    location.href="<?php echo base_url();?>index.php/penerbit/hapus_penerbit?id_penerbit="+ id_penerbit; 
                    return true;
                }
                return false;
            }
        </script>
</body>
</html>