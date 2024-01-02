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
      <h1 class="text-center">D22.2022.03393 Astrid Maulidya Ayu</h1>
      <a href="create.php" class="btn btn-primary mb-2">Tambah</a>
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">No.RM</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Alamat</th>
            <th scope="col">Diagnosa</th>
            <th scope="col">Ruang</th>
            <th scope="col">Telpon</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
          <?php
              // variable no digunakan untuk meng-increments field no pada table. Karena nanti kita akan melooping data hasil query select kita. 
              $no = 1;
              // Simpan query kita kedalam variable agar lebih rapi, dan bisa reusable.
              // Arti dari query di bawah adalah pilih semua data dari table tb_siswa.
              $query = "SELECT * FROM tb_siswa";
              // Eksekusi Query
              // Simpan hasil eksekusi query kita ke dalam variable. Di sini variable nya saya kasih nama result.
              $result = mysqli_query($koneksi, $query);
              // Done. Waktunya Looping
          ?>
        <tbody>
          <?php
            foreach ($result as $data){
              echo "
                <tr>
                  <th scope='row'>". $no++ ."</th>
                  <td>". $data["norm"] ."</td>
                  <td>". $data["nama"] ."</td>
                  <td>". $data["alamat"] ."</td>
                  <td>". $data["diagnosa"] ."</td>
                  <td>". $data["ruang"] ."</td>
                  <td>". $data["telpon"] ."</td>
                  <td> 
                    <a href='update.php?id=".$data["id"]."' type='button' class='btn btn-success'>Update</a>
                    <a href='delete.php?id=".$data["id"]."' type='button' class='btn btn-danger' onlick='return confirm('Yakin ingin menghapus data?')'>Delete</a>
                  </td>
                </tr>  
              ";
            }
          ?>
        </tbody>  
      </table>
    </div>
  </section>
    
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