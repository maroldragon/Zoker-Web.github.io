<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    @include_once('head.php')
  ?>
  <title>Profil · Perpustakaan Digital</title>
</head>
<body>
  
  <?php
    @include_once('header.php')
  ?>
  <?php
    @include_once('sourceJs.php')
  ?>
  
  <div class="container-md form-content col-lg-8 col-md-10 col">
    <div class="row">
      <div class="col-md-4 pos-center pb-3">
      <div class="avatar-upload">
        <div class="avatar-edit">
          <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
          <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
          <div id="imagePreview">
          </div>
        </div>
    </div>
      </div>
      <div class="col-md-8">
        <h1>Profil</h1>
        <div class="row mt-4">
          <div class="col-4">
            <p>Nama Lengkap</p>
            <p>Username</p>
            <p>Jenis Kelamin</p>
            <p>Tempat Lahir</p>
            <p>Tanggal Lahir</p>
            <p>Alamat</p>
            <p>Kota</p>
            <p>Provinsi</p>
            <p>Negara</p>
            <p>Email</p>
          </div>
          <div class="col-8">
            <p>: <span id="textNamaLengkap"></span></p>
            <p>: <span id="textUsername"></span></p>
            <p>: <span id="textJenisKelamin"></span></p>
            <p>: <span id="textTempatLahir"></span></p>
            <p>: <span id="textTanggalLahir"></span></p>
            <p>: <span id="textAlamat"></span></p>
            <p>: <span id="textKota"></span></p>
            <p>: <span id="textProvinsi"></span></p>
            <p>: <span id="textNegara"></span></p>
            <p>: <span id="textEmail"></span></p>
          </div>
        </div>
        <a href="edit_profil.php" class="btn btn-primary mt-4" id="buttonEditProfil">Edit Profil</a>
      </div>
    </div>
  </div>

  <?php
    @include_once('footer.php')
  ?>
  <script src="js/custom.js"></script>
  <script>
    $('#imageProfil').css({'height':$('#imageProfil').width()+'px'});
    $(window).on('resize', function(){
      $('#imageProfil').css({'height':$('#imageProfil').width()+'px'});
    });
    
    $("#buttonUbahFoto").click(function() {

    })

  </script>  

</body>
</html>