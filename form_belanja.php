<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="tab2">
        <table class="table">
            <thead class="thead-dark">
            <tbody>
                <tr class="tr1">
                <td>Daftar Harga</td>
                </tr>
                <tr>
                    <td>TV : 4.200.000</td>
                </tr>
                <tr>
                    <td>Kulkas : 3.100.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci : 3.800.000</td>
                </tr>
                <tr class="tr1">
                    <td>Harga Dapat Berubah Setiap Saat </td>
                </tr>
            </tbody>
        </table>

        <div class="tab1">
        <h3>Belanja Online</h3>
        <hr/> <br> <br>
        <div class="box">
        <form method="POST" >
            <div class="form-group row">
                <label for="cs" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="cs" name="cs" placeholder="Nama Custumer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4" name="pilihan">Pilih Produk</label> 
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="tv" id="tv" type="radio" class="custom-control-input" value="tv"> 
                        <label for="tv" name="tv" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="kulkas" id="kulkas" type="radio" class="custom-control-input" value="kulkas"> 
                        <label for="kulkas" name="kulkas" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="mesincuci" id="mesincuci" type="radio" class="custom-control-input" value="mesincuci"> 
                        <label for="mesincuci" name="mesincuci" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        </div>
    </div>
<hr>
<?php
 $nama = isset ($_POST['cs']) ? $_POST['cs'] : '';
 $pilihan = isset ($_POST['pilihan']) ? $_POST['pilihan'] : '';
 $jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : '';
 
 if($pilihan = "tv"){
    $pilih = 4200000;
 }elseif($pilihan = "kulkas"){
     $pilih = 3100000;
 }elseif($pilihan = "mesincuci"){
     $pilih = 3800000;
 }

    echo 'Nama Customer : '.$nama;
    echo '<br/>Produk Pilihan : '.$pilihan;
    echo '<br/>Jumlah Beli : '.$jumlah;
    echo '<br/>Total Belanja : Rp. '.(int)$jumlah*(int)$pilih; 
?>
</body>
</html>