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
        <label class="inp-text-label" for="inputNamaLengkap">Nama Lengkap</label>
        <input type="text" class="form-control inp-text" id="inputNamaLengkap">
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
          <option value="laki-laki">Laki-laki</option>
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
        <input type="date" value="2018-07-22" class="form-control inp-text" id="inputTanggalLahir">
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
        <div class="input-group">
          <input type="password" class="form-control inp-text" id="inputPassword">
          <button class="btn btn-select" type="button" id="showPassword">
              <i class="fas fa-eye" id="iconShowPassword"></i>
          </button>
        </div>
      </div>
      <div class="col">
        <label class="inp-text-label"  for="inputKonfirmasiPassword">Konfirmasi Password</label>
        <div class="input-group">
          <input type="password" class="form-control inp-text" id="inputKonfirmasiPassword">
          <button class="btn btn-select" type="button" id="showKonfirmasiPassword">
              <i class="fas fa-eye" id="iconShowKonfirmasiPassword"></i>
          </button>
        </div>
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
  <?php
    @include_once('sourceJs.php')
  ?>

  <script src="js/custom.js"></script>

  <script> 
    $("#buttonDaftar").click(function(){
      console.log("Daftar");
      registerUser()
    });

    $('#inputTanggalLahir').val(moment("2000/01/01").format('YYYY-MM-DD'));

    $("#showPassword").on('click',function() {
			var $pwd = $("#inputPassword");
			if ($pwd.attr('type') === 'password') {
				$pwd.attr('type', 'text');
        $("#iconShowPassword").removeClass("fa-eye");
        $("#iconShowPassword").addClass("fa-eye-slash");
			} else {
				$pwd.attr('type', 'password');
        $("#iconShowPassword").removeClass("fa-eye-slash");
        $("#iconShowPassword").addClass("fa-eye");
			}
		});

    $("#showKonfirmasiPassword").on('click',function() {
			var $pwd = $("#inputKonfirmasiPassword");
			if ($pwd.attr('type') === 'password') {
				$pwd.attr('type', 'text');
        $("#iconShowKonfirmasiPassword").removeClass("fa-eye");
        $("#iconShowKonfirmasiPassword").addClass("fa-eye-slash");
			} else {
				$pwd.attr('type', 'password');
        $("#iconShowKonfirmasiPassword").removeClass("fa-eye-slash");
        $("#iconShowKonfirmasiPassword").addClass("fa-eye");
			}
		});
  </script>

</body>
</html>