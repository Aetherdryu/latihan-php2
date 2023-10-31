<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>php_latihan2</title>
  </head>
  <body>

    <div class="container">
        <h1 class="text-left">Toko Razi</h1>
        <p class="text-md-start">Program sederhana untuk menghitung penjualan barang Toko Razi</p>
    </div>
    <div class="container">
      <form action="" method="post">
        <div class="form-group">
            <label for="exampleInputBarang">Nama Barang</label>
            <input type="text" class="form-control" id="exampleInputBarang" placeholder="Masukan Nama Barang" name="nama_brg">
            <label for="exampleInputBarang">Harga Barang</label>
            <input type="text" class="form-control" id="exampleInputBarang" placeholder="Masukan Harga Barang" name="hrg_brg">
            <label for="exampleInputBarang">Jumlah Barang</label>
            <input type="text" class="form-control" id="exampleInputBarang" placeholder="Masukan Jumlah Barang" name="jml_brg">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="submit">Hitung</button>
      </form>
    </div>


    <?php
    if (isset($_POST['submit'])) {
        $brg = $_POST['nama_brg'];
        $harga = $_POST['hrg_brg'];
        $jumlah = $_POST['jml_brg'];

        echo "<div class='container'>";
        echo "<hr><h3 class='text-md-start'>Jumlah yang harus dibayar";

        $barang = $jumlah * $harga;
        $diskon =  $barang * 0.10;
        $total = $barang-$diskon;

        echo "Nama Barang : $brg <br>";
        echo "Harga Barang : $harga <br>";
        echo "Jumlah Barang : $jumlah <br>";
        echo "Diskon : 10% <br>";
        echo "<h3 class='text-md-start'>Rp. $total</h3>";
        echo "</div>";
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>