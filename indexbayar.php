<!DOCTYPE html>
<html ng-app="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!--Responsive-->
    <title>FORM PAY</title>
    <link rel="stylesheet" href="css/style.css" type="text/css"> <!-- Panggil CSS -->
    <script src="js/javascript.js" type="text/javascript"></script> <!-- Panggil JS -->
    <script src="js/angular-1.7.5/angular.min.js" type="text/javascript"></script> <!--AngularJS-->
    <title>FORM PAY</title>
  </head>
  <body>
  <div class="container">
    <h1 style="margin:10px;">PAYMENT</h1>
    <form class="" action="index.html" method="post">
      <input required class="input-form laf" type="text" name="" value="" placeholder="Nama">
      <input required class="input-form laf" type="number" name="" value="" placeholder="No Telepon">
      <label for="tipe_beasiswa" class="form-label1">Kategori Paket</label><br>
      <select class="form-select mb-2" id="tipe_beasiswa" aria-label="Pilih tipe beasiswa" name='tipe'>
        <option value="Pelatihan">Live Class Gold UTBK Saintek (Rp 1.080.000)</option>
        <option value="pendidikan">Live Class Gold UTBK Soshum (Rp 1.080.000)</option>
        <option value="pendidikan">Live Class Silver UTBK Saintek (Rp 630.000)</option>
        <option value="pendidikan">Live Class Silver UTBK Soshum (Rp 630.000)</option>
        <option value="pendidikan">Prime UTBK (Rp 415.000)</option>
        <option value="pendidikan">Prime UTBK Lite (Rp 350.000)</option>
        <option value="pendidikan">Prime UTBK 1 Tahun (Rp 530.000)</option>
        <option value="pendidikan">Prime UTBK Lite 1 Tahun (Rp 460.000)</option>
        <option value="pendidikan">Prime 1 Tahun (Rp 400.000)</option>
        <option value="pendidikan">Prime 9 Bulan (Rp 340.000)</option>
        <option value="pendidikan">Prime 6 Bulan (Rp 260.000)</option>
        <option value="pendidikan">Prime 1 Bulan (Rp 100.000)</option>
        <option value="pendidikan">20x Try Out UTBK (Rp 229.000)</option>
        <option value="pendidikan">10x Try Out (Rp 149.000)</option>
			<input type="submit" name="Pilih" value="Pilih">
      <textarea class="input-form" cols="5" rows="5" name="comment" placeholder="Catatan" required></textarea>
      </textarea>

      <div class="mb-5"> 
        <label>Pilih Metode Pembayaran</label><br>
          <label>
            <input type="radio" name="test" value="small" checked>
            <img src="img/bni.png" width="80px" height="30px" alt="Option 1">
          </label>
          
          <label>
            <input type="radio" name="test" value="big">
            <img src="img/logo-bca.png" width="80px" height="30px" alt="Option 2">
          </label>

          <label>
            <input type="radio" name="test" value="big">
            <img src="img/bri.png" width="80px" height="35px" alt="Option 3">
          </label>

          <label>
            <input type="radio" name="test" value="big">
            <img src="img/gopay.jpg" width="80px" height="40px"" alt="Option 4">
        </label>
      </div><br>

      <div class="mb-5">
        <label for="gambar_beasiswa" class="form-label2">Bukti Pembayaran</label><br>
        <br><input type="file" class="form-control" id="gambar_beasiswa" accept = "image/*" name='gambar'>
      </div><br>
      <button class="btn-form-pay">Kirim</button>
      <button class="btn-form-change" id="myBtn">Batal</button>
    </form>
  </div>

  </body>
</html>

