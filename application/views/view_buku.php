
<html>
<title>lihat Buku</title>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/body.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/modal.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <input class="btn btn-primary navbar-btn" type="button" name="data_baru" value="Home" onclick=location.href="<?php echo base_url();?>index.php/user/view_dashboard">
            <input class="btn btn-success navbar-btn" id="lihat" type="button" name="lihat_data" value="tambah data" onclick=location.href="<?php echo base_url();?>index.php/buku/view_formBuku">
       </div>
    </nav>
    <div class="container">
        <table align="center" class="table table-hover">
            <tr> 
                <th>Judul</th>
                <th>Penerbit</th>
                <th>pengarang</th>
                <th>Jumlah Halaman</th>
                <th>Add by</th>
                <th>Action</th>
            </tr>
                <?php
                    foreach ($buku as $value) {
                    $id=$value->id_buku;
                    $judul=$value->judul;
                    $nama_penerbit=$value->nama_penerbit;
                    $nama_pengarang=$value->nama_pengarang;
                    $jumlah_halaman=$value->jumlah_halaman;
                    $tahun_terbit=$value->tahun_terbit;
                    $nama_admin=$value->nama_user;
                ?>
            <tr>
                <td>
                    <?php echo $judul; ?>
                </td>
                <td>
                    <?php echo $nama_penerbit; ?>
                </td>
                <td>
                    <?php echo $nama_pengarang; ?>
                </td>
                <td>
                    <?php echo $jumlah_halaman; ?>
                </td>
                <td>
                    <?php echo $nama_admin; ?>
                </td>
                <td>
                    <input  class="btn btn-success navbar-btn" type="button" value="Edit" onclick=location.href="<?php echo base_url();?>index.php/buku/view_edit_buku?id_buku=<?php echo $id?>">
                    <input  class="btn btn-danger navbar-btn" type="button" value="Delete" onclick='return deleteValidation(<?php echo $id;?>)'/>
                </td>
            </tr>
            <?php
            }
        ?>  
        </table>
    </div>
    <script type="text/javascript">
            function deleteValidation(id_buku){
                $conf = confirm("Yakin?");
                if($conf){
                    location.href="<?php echo base_url();?>index.php/buku/delete_buku?id_buku="+ id_buku; 
                    return true;
                }
                return false;
            }
        </script>

</body>
</html>