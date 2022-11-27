<?php
    include('config.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
	<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="na\vbarNavAltMarkup">
                <div class="navbar-nav mx-left">
                    <a class="nav-link text-light" href="RIKA_HOME.PHP">Home</a>
                    <a class="nav-link text-light" href="ADD_ITEM.php">MyCar</a>
                </div>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container"> 
		<h1 class="text">Tambah Mobil</h1>
        <h6 class="mb-3">Tambah Mobil Baru Anda Ke List Show Room </h6><br>
        <div class="clearfix">
        <div class="container">
        <?php
            $query = mysqli_query($connect,"SELECT*from showroom_rika_table");

            if($query){
                while($selects = mysqli_fetch_assoc($query)){
            
        ?>
            <div class="row">
                <div class="col">
                    <img src="<?= $selects['foto_mobil']?>" class="card-img-top" alt="...">
                </div>  
                <div class="col">
                <form action="create.php" method="POST">
                    <div class="mb-3">
                        <b><label class="form-label">Nama Mobil</label></b>
                        <input type="text" class="form-control" name="nama_mobil" value="<?= $selects['nama_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Nama Pemilik</label></b>
                        <input type="text" class="form-control" name="pemilik_mobil" value="<?= $selects['pemilik_mobil']?>" readonly>
                    </div>
                    <div class="mb-3">
                        <b><label  class="form-label">Merk</label></b>
                        <input type="text" class="form-control"  name="merk_mobil" value="<?= $selects['merk_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <b><label  class="form-label">Tanggal Beli</label></b>
                        <input type="date" class="form-control"  name="tanggal_beli" value="<?= $selects['tanggal_beli']?>">
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Deskripsi</label></b>
                        <textarea class="form-control"  name="deskripsi" value="<?= $selects['deskripsi']?>"></textarea>
                    </div>
                    <div class="mb-3">
                        <b><label class="form-label">Foto</label></b>
                        <input class="form-control" type="file" name="foto_mobil" value="<?= $selects['foto_mobil']?>">
                    </div>
                    <div class="mb-3">
                        <b><label>Status Pembayaran</label></b><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status_pembayaran"  value="Lunas">
                            <label class="form-check-label">Lunas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status_pembayaran"  value="Belum Lunas">
                            <label class="form-check-label" >Belum Lunas</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div>
                            <button class="btn btn-primary" type="submit" value="simpan">Edit</button>
                            <br>
                        </div>
                    </div>
		        </form>
                </div> 
            </div>
        </div>
        </div>
        <?php
                }
            }
            ?>
            
        </div>
	</div>
</body>
</html>
