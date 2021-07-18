<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    @include_once('head.php')
  ?>
  <title>Register · Perpustakaan Digital</title>
</head>
<body>
  <?php
    @include_once('header.php')
  ?>

  <div class="container form-content col-lg-6 col-md-9 col">
    <h1>Daftar Sekarang</h1>
    <div class="row mt-3 mb-2">
      <div class="col">
        <label class="inp-text-label" for="inputNamaDepan">Nama Depan</label>
        <input type="text" class="form-control inp-text" id="inputNamaDepan">
      </div>
      <div class="col">
        <label class="inp-text-label"  for="inputNamaBelakang">Nama Belakang</label>
        <input type="text" class="form-control inp-text" id="inputNamaBelakang">
      </div>
    </div>
    <div class="row mb-2 col">
      <div class="col">
        <label class="inp-text-label"  for="inputUsername">Username</label>
        <input type="text" class="form-control inp-text" id="inputUsername">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label class="inp-text-label"  for="inputJenisKelamin">Jenis Kelamin</label>
        <select class="form-control inp-text" name="Jenis Kelamin" id="inputJenisKelamin">
          <option value="laki-Laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label class="inp-text-label" for="inputTempatLahir">Tempat Lahir</label>
        <input type="text" class="form-control inp-text" id="inputTempatLahir">
      </div>
      <div class="col">
        <label class="inp-text-label" for="inputTanggalLahir">Tanggal Lahir</label>
        <input type="date" class="form-control inp-text" id="inputTanggalLahir">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label class="inp-text-label" for="inputAgama">Agama</label>
        <select class="form-control inp-text" name="Agama" id="inputAgama">
          <option value="islam">Islam</option>
          <option value="kristen protestan">Kristen Protestan</option>
          <option value="khatolik">Katolik</option>
          <option value="buddha">Buddha</option>
          <option value="hindu">Hindu</option>
          <option value="kong hu cu">Kong Hu Cu</option>
        </select>
      </div>
      <div class="col">
        <label class="inp-text-label"  for="inputHobi">Hobi</label>        
        <input type="text" class="form-control inp-text" id="inputHobi">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label class="inp-text-label"  for="inputNegara">Negara</label>
        <input type="text" class="form-control inp-text" id="inputNegara">
      </div>
      <div class="col">
        <label class="inp-text-label"  for="inputProvinsi">Provinsi</label>
        <input type="text" class="form-control inp-text" id="inputProvinsi">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label class="inp-text-label"  for="inputKota">Kota</label>
        <input type="text" class="form-control inp-text" id="inputKota">
      </div>
      <div class="col">
        <label class="inp-text-label"  for="inputAlamat">Alamat</label>
        <input type="text" class="form-control inp-text" id="inputAlamat">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label class="inp-text-label"  for="inputEmail">Email</label>
        <input type="email" class="form-control inp-text" id="inputEmail">
      </div>
    </div>
    <div class="row mb-2">
      <div class="col">
        <label class="inp-text-label"  for="inputPassword">Password</label>
        <input type="password" class="form-control inp-text" id="inputPassword">
      </div>
      <div class="col">
        <label class="inp-text-label"  for="inputKonfirmasiPassword">Konfirmasi Password</label>
        <input type="password" class="form-control inp-text" id="inputKonfirmasiPassword">
      </div>
    </div>
    <div class="row">
      <div class="col">        
        <button type="submit" class="btn btn-primary form-control mt-3" id="buttonDaftar">Daftar</button>
      </div>
    </div>
  </div>
  
  <?php
    @include_once('footer.php')
  ?>

  <script src="js/custom.js"></script>

  <script> 
  $("#buttonDaftar").click(function(){
    console.log("Daftar");
    registerUser()
  });
  </script>

</body>
</html>