<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
</head>
<body>
    <?php
        foreach ($buku as $value) {
            $id=$value->id_buku;
            $judul=$value->judul;
            $nama_penerbit=$value->nama_penerbit;
            $nama_pengarang=$value->nama_pengarang;
            $jumlah_halaman=$value->jumlah_halaman;
            $kondisi=$value->kondisi;
            $tahun_terbit=$value->tahun_terbit;
            $kode_buku=$value->kode_buku;
            $nama_admin=$value->nama_user;
    ?>
    <table width="500px" align="center" class="table table-bordered">
                <tr>
                    <td>Judul</td>
                    <td>: <?php echo $judul; ?></td><br>
                </tr>
                <tr>
                    <td> Pnerbit</td>
                    <td> : <?php echo $nama_penerbit; ?></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td> : <?php echo $nama_pengarang; ?></td>
                </tr>
                <tr>
                    <td>Jumlah halaman</td>
                    <td>: <?php echo $jumlah_halaman; ?></td><br>
                </tr>

                <tr>
                    <td>tahun Terbit</td>
                    <td>: <?php echo $tahun_terbit;?></td><br>
                </tr>
                <tr>
                    <td>Nama Admin</td>
                    <td>: <?php echo $nama_admin?></td>
                <tr>
                    <td>Kondisi_buku</td>
                    <td>: <?php echo $kondisi?></td>
                <tr>
                    <td>Kode_buku</td>
                    <td>: <?php echo $kode_buku?></td>
                </tr>
            <?php
        }
        ?>
        </table>
</body>
</html>


        



