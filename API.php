<?php
 //inisialisasi fungsi curl
$url_gambar = "http://aqillahfreshh.000webhostapp.com/";
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'http://aqillahfreshh.000webhostapp.com/php/json.php');

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  $content = curl_exec($ch);

  curl_close($ch);

  //mengubah data json menjadi data array asosiatif
  $result=json_decode($content,true);

  //looping data menggunakan foreach
  

 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="main.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light sticky" id="navbar">
        <div class="container">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </div>
        </div>
    </nav>

	  
       <div class="container">
                <div class="data-indo">
                    <div class="card">
                        <h5 class="card-header" id="indo">Data Produk</h5>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class=" table table-striped card-text table-bordered">
        <tr>
            <?php foreach ($result as $value) : ?>
                <td  style="width: 200px; height: 200px;" ><img src="<?= $url_gambar . $value["gambar"] ?>" style="width:100px;"> 
                    <br> 
                    <br> NAMA : <br><?= $value["nama"]?> <br>
                    <br> STOK : <br><?= $value["stok"] ?> <br>
                    <br> HARGA  : <br>Rp. <?= $value["harga"] ?><br> 
                    <br> <p>DESKRIPSI    : <?= $value['deskripsi']?></p><br>
                    <br> <button><a href="<?= $url_gambar . $value["gambar"] ?>" target="_blank">lihat barang</a></button></td>
            <?php endforeach; ?>
        </tr>
    </table>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
        <div class="container">
            <p> Made by UUS</p>
        </div>
    </div>
    <!-- end footer -->


    <!-- sticky bar js -->
    <script src="util/js/sticky_bar.js"></script>

    <!-- js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
