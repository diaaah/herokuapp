<!DOCTYPE html>
<html>
<title></title>
<head>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/modal.js"></script> 
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
   <title>Bootstrap Part 15 : Membuat Modal dengan Bootstrap</title>
</head>
<body>
   <div class="container">
   <br/>
   <!-- Tombol untuk menampilkan modal-->
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buka Modal</button>
   <!-- Modal -->
   <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
         <!-- konten modal-->
         <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Detail Buku</h4>
            </div>
            <!-- body modal -->
            <div class="modal-body">
              <form name="form_input_data" method="POST" onsubmit='return validateForm()' action="<?php echo base_url();?>index.php/buku/edit_buku">
   <table width="500px" align="center">
    <input type="hidden"  name="id_buku">
      <tr>
         <td>Judul</td>
         <td>: <input id="judul" type="text" name="judul"></td><br>
      </tr>
        <tr>
        <td> Pnerbit</td>
      <td> :
                <select id="penerbit" name="penerbit" >
                    <option>></option>
                     <option></option>
                </select>
        </td>
        </tr>

        <tr>
        <td>Pengarang</td>
      <td> :
                <select id="pengarang" name="pengarang" >
                    <option></option>
                   <option></option>
                </select>
        </td>
        </tr>

      <tr>
         <td>Jumlah halaman</td>
         <td>: <input id="halaman" type="text" name="halaman" value=> </td><br>
      </tr>

        <tr>
            <td>tahun Terbit</td>
            <td>: <input id="tahun" type="text" name="tahun" value= ></td><br>
        </tr>
         <tr>
            <td>Nama Admin</td>
            <td>: <select id="addby" name="addby" class="form-control">
                    <option>Nama Admin</option>
                     <option ></option>    
                </select>
            </td><br>
        </tr>
   </table>
<br/>
   <table bgcolor="#696969" height="25px" width="700px" align="center" style="border:1px inset;"">
      <tr align="center">
         <td><input type="submit" name="submit" value="Simpan"> </td>
      </tr>
   </table>
</form>
            </div>
            <!-- footer modal -->
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
            </div>
         </div>
      </div>
   </div>
   </div>
</body>
</html>