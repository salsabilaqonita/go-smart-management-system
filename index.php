<?php 

require "connect.php";
require "metpem.php";
if (isset($_POST['submit'])) {
  tambah($_POST);
}

?>


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
    <form class="formpay" action="pembayaran-sukses.php" method="POST">
      <input required class="input-form laf" type="text" name="nama" value="" placeholder="Nama">
      <input required class="input-form laf" type="number" name="HP" value="" placeholder="No Telepon">
      <label for="paket" class="form-label1">Kategori Paket</label><br>
      <select class="form-select mb-2" id="paket" aria-label="Pilih tipe beasiswa" name='tipe'>
        <option value="Live Class Gold UTBK Saintek">Live Class Gold UTBK Saintek (Rp 1.080.000)</option>
        <option value="Live Class Gold UTBK Soshum">Live Class Gold UTBK Soshum (Rp 1.080.000)</option>
        <option value="Live Class Silver UTBK Saintek">Live Class Silver UTBK Saintek (Rp 630.000)</option>
        <option value="Live Class Silver UTBK Soshum">Live Class Silver UTBK Soshum (Rp 630.000)</option>
        <option value="Prime UTBK">Prime UTBK (Rp 415.000)</option>
        <option value="Prime UTBK Lite">Prime UTBK Lite (Rp 350.000)</option>
        <option value="Prime UTBK 1 Tahun">Prime UTBK 1 Tahun (Rp 530.000)</option>
        <option value="Prime UTBK Lite 1 Tahun">Prime UTBK Lite 1 Tahun (Rp 460.000)</option>
        <option value="Prime 1 Tahun">Prime 1 Tahun (Rp 400.000)</option>
        <option value="Prime 9 Bulan">Prime 9 Bulan (Rp 340.000)</option>
        <option value="Prime 6 Bulan">Prime 6 Bulan (Rp 260.000)</option>
        <option value="Prime 1 Bulan">Prime 1 Bulan (Rp 100.000)</option>
        <option value=" Diamond 20x Try Out UTBK">20x Try Out UTBK (Rp 229.000)</option>
        <option value="Diamond 10x Try Out">10x Try Out (Rp 149.000)</option>
      <textarea class="input-form" cols="5" rows="5" name="catatan" placeholder="Catatan"></textarea>
      </textarea>

      <div class="mb-5"> 
        <label>Pilih Metode Pembayaran</label><br>
          <label>
            <input type="radio" name="paymentMethod" value="BNI" checked>
            <img src="img/bni.png" width="80px" height="30px" alt="Option 1">
          </label>
          
          <label>
            <input type="radio" name="paymentMethod" value="BCA">
            <img src="img/logo-bca.png" width="80px" height="30px" alt="Option 2">
          </label>

          <label>
            <input type="radio" name="paymentMethod" value="BRI">
            <img src="img/bri.png" width="80px" height="35px" alt="Option 3">
          </label>

          <label>
            <input type="radio" name="paymentMethod" value="GOPAY">
            <img src="img/gopay.jpg" width="80px" height="40px"" alt="Option 4">
        </label>
      </div><br>


        <!-- submit button -->
        <button class="btn-form-pay" type="submit" name="submit">Kirim</button></a>
        <button class="btn-form-change" id="myBtn">Batal</button>
    </form>
  </div>

  <script>
    function processPayment() {
        const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

        if (!selectedPaymentMethod) {
            alert("Please select a payment method.");
            return;
        }

        const nama = document.getElementByName("nama").value;
        const HP = document.getElementByName("HP").value;
        const paket = document.getElementById("paket").value;
        const catatan = document.getElementByName("catatan").value;
        const paymentMethod = selectedPaymentMethod.value;
        const bukti = document.getElementById("bukti").value;
        
        // Redirect to the success page
        window.location.href = `pembayaran-sukses.php?paymentMethod=${paymentMethod}&nama=${nama}&HP=${HP}`;
    }
</script>

  </body>
</html>