<!-- Panggil file koneksi, karena kita membutuhkan nya -->
<?php
  include "koneksi.php"
?>
<html>
    <head>
         <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Layout</title>
    
            <style>
                body {
                    background-image: url('image/gambar.jpg');
                    background-size: cover;
                    margin: 0;
                    padding: 0;
                    font-family: Arial, sans-serif;
                }
                /* Add other CSS styles for your content here */
                /* ... */
            </style>
        <body>
            <table align= "center" border="0" width="900px">
                <!--header-->
                <tr bgcolor="#56E4E9">
                    <td colspan="2" height="90px"><img src="image/Gambar2.jpg" alt='Logo Klinik' width="1000" height="300"></td>
                    <!--tag dihilangkan-->
                </tr>
                <!--body-->
                <tr>   
                    <td width="600px" height="400px" valign="top" bgcolor="#56E4E9" >
                        <!--kolom body1-->
                        <table border="1">
                            <tr bgcolor="white">
                                <td align= "center" width="200px"><a href=home.html>Home</a></td>
                                <td align= "center" width="200px"><a href=kontakjec.html>Contact JEC</td>
                                <td align= "center" width="200px"><a href=daftar.html>Daftar</td>
                                <td align= "center" width="200px"><a href=pelayanan.html>Pelayanan</td>
                                <td align= "center" width="200px"><a href="https://jec.co.id/id/hospital/candi-eye-center-semarang">Klinik</td>
                            </tr>
                        </table>
                        <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Form Tambah Data</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputnorm" class="form-label">norm</label>
          <input type="number" class="form-control" id="inputnorm" name="norm" placeholder="Masukan norm Siswa">
        </div>
        <div class="mb-3">
          <label for="inputnama" class="form-label">nama</label>
          <input type="text" class="form-control" id="inputnama" name="nama" placeholder="Masukan nama Siswa">
        </div>
        <div class="mb-3">
          <label for="inputalamat" class="form-label">alamat</label>
          <input type="text" class="form-control" id="inputalamat" name="alamat" placeholder="Masukan alamat Siswa">
        </div>
        <div class="mb-3">
          <label for="inputdiagnosa" class="form-label">diagnosa</label>
          <input type="text" class="form-control" id="inputdiagnosa" name="diagnosa" placeholder="Masukan diagnosa Siswa">
        </div>
        <div class="mb-3">
          <label for="inputruang" class="form-label">Ruang</label>
          <input type="text" class="form-control" id="inputruang" name="ruang" placeholder="Masukan ruang Siswa">
        </div>
        <div class="mb-3">
          <label for="inputtelpon" class="form-label">telpon</label>
          <input type="text" class="form-control" id="inputtelpon" name="telpon" placeholder="Masukan telpon Siswa">
        </div>
        <input name="daftar" type="submit" class="btn btn-primary" value="Tambah">
        <a href="form.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['daftar'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $norm = $_POST['norm'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $diagnosa = $_POST['diagnosa'];
      $ruang = $_POST['ruang'];
      $telpon = $_POST['telpon'];

      // Membuat Query
      $query = "INSERT INTO tb_siswa (norm, nama , alamat, diagnosa, ruang, telpon) VALUES('".$norm."', '".$nama."', '".$alamat."', '".$diagnosa."', '".$ruang."', '".$telpon."')";

      $result = mysqli_query($koneksi, $query);

      if($result){
        header("location: form.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

    
        <td align="center" width="300px" bgcolor="#56E4E9"><marquee>SELAMAT DATANG</marquee>
                        
                        <table>
                            <tr>
                                <td bgcolor="white" width="200" height="50" align="center" valign="middle"><a href=https://id.m.wikipedia.org/wiki/Rumah_Sakit_Mata_JEC>Informasi</td>
                            </tr>
                            <tr>
                                <td bgcolor="white" width="200" height="50" align="center" valign="middle"><a href=https://jec.co.id/id/doctor/dr-arnila-novitasari-saubig-spmk>Jadwal</td>
                            </tr>
                            <tr>
                                <td bgcolor="white" width="200" height="50" align="center" valign="middle"><a href=galery.html>Galery JEC</td>
                            </tr>
                           
                    
                        </table>
                        <td<body>
                            <style>
                                p {
                                    margin: 10px 0;
                                }
                            </style>
                            <p>Apotek</p>
                            <p>Laboratorium</p>
                            <p>Instalasi Gawat Darurat (IGD)</p>
                            <hr> 
                            <ul>
                                <li>Katarak</li>
                                <li>Kornea</li>
                                <li>Retina</li>
                            </ul>
                            </body>
                        
                    </td> 
                <!--footer-->
                <tr bgcolor="#56E4E9">
                    <td align="center" colspan="2" height="120px">
                        <table border="0">
                            <tr>

                                <td>
                                    <img src="image/logo.jpg" alt="Logo Klinik" width="200" height="150">
                                </td>

                               
                                <td>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.877436766525!2d110.4212628!3d-7.0236901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b80c2a339c5%3A0xa9ad9bcc616c5576!2sKlinik%20Utama%20Mata%20Candi%20Eye%20Center%20%40%20Semarang!5e0!3m2!1sid!2sid!4v1696674274283!5m2!1sid!2sid" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <!-- Masukkan kode peta Anda di sini, jika diperlukan -->

                                </td>

                                <td>
                                    <iframe width="200" height="150" src="https://www.youtube.com/embed/eybfjaZ8y5c?si=zypp0cojKKPh8-81" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </td>
                               
                                <td>
                                    <iframe width="200" height="150" src="https://www.youtube.com/embed/2Kv4bcQoJZI?si=T11yK_bSRGZc17je" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </td>

                         </tr>
                        </table>
                            <p>&copy; D22.2022.03393 - Astrid Maulidya Ayu</p>
                    </td>
            <!-- tag dihilangkan-->
                </tr>
            </table>
        </body>
    </head>
</html>