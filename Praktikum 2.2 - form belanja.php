
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Jangan Lupa Belanja</title>
</head>
<body>
<h2 style="text-align: center">Belanja Daring</h2>

       <!-- Daftar Harga -->
       <div class="m-5 border border-primary p-4 rounded">
    <h6 style="text-align: center"> Daftar Harga </h6>
        1. Kipas Angin : Rp. 850.000 <br>
        2. Kompor : Rp. 350.000 <br>
        3. AC : Rp. 2.500.000 <br>
        <br>
        <br>

        Note : Harga dapat berubah setiap saat.
    
    </div>

    <!-- Form Belanja -->
    <div class="m-5 border border-primary p-4 rounded">
<form method="POST" autocomplete="off" action="belanja.php">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="text" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="Kipas Angin"> 
        <label for="radio_0" class="custom-control-label">Kipas Angin</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kompor"> 
        <label for="radio_1" class="custom-control-label">Kompor</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="AC"> 
        <label for="radio_2" class="custom-control-label">AC</label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="text1" name="jumlah" placeholder="Masukan Jumlah Pembelian" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

    <!-- Print Variabel -->
    <div class="m-5 border border-success p-4 rounded">
    <h6 style="text-align: center"> Rincian Pembelanjaan </h6>
        <?php
        error_reporting(0);
         $nama_lengkap = $_POST['nama'];
         $produk = $_POST['produk'];
         $jumlah = $_POST['jumlah'];

         if($produk == "Kipas Angin") {
           $total = $jumlah * 850000;
         }
         elseif($produk == "Kompor") {
           $total = $jumlah * 350000;
         }
         elseif($produk == "AC") {
           $total = $jumlah * 2500000;
         }
            
          // Cetak Pesanan
          echo '<br>Nama Customer = '.$nama_lengkap;
          echo '<br>Produk = '.$produk;
          echo '<br>Jumlah Beli = '.$jumlah;
          echo '<br>Total Belanja = '.$total;
        ?>
    </div>
</body>
</html>