<?php
session_start();

include('../koneksi.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Menu</title>
    <link href="../Aset/Gambar/DR4.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="../Aset/Gambar/DR4.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
      DResto
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pegawai.php">Pegawai</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="meja.php">Meja</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="riwayat_transaksi.php">Riwayat Transaksi</a>
        </li>
      </ul>
      <span class="navbar-text">
        <a href="../logout.php" class="btn btn-danger text-white">Logout</a>
      </span>
    </div>
  </div>
</nav>
    <div class="container">
        <form action="proses_tambah_menu.php" method="post">
            <div class="card p-4 position-relative mt-4">
                <div class="d-flex justify-content-between">
                    <h5>Tambah Menu</h5>
                    <a href="menu.php" class="btn btn-warning">Kembali</a>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label for="">Nama Menu</label>
                        <input type="text" class="form-control" name="nama_menu">
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label for="">Kategori Menu</label>
                        <select name="kategori" id="" class="form-select">
                            <option value="" disabled selected hidden>Makanan Atau Minuman</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label for="">Harga Menu</label>
                        <input type="number" class="form-control" name="harga">
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <label for="">Stok</label>
                        <input type="number" class="form-control" name="stok">
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-2">
                        <button class="btn btn-primary" name="submit">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>