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
		<div class="col-4">
            <?php
            $query = mysqli_query($connect,"SELECT*from modul3");

            if($query){
                while($selects = mysqli_fetch_assoc($query)){
            
            ?>
                
            <?php
                }
            }
            ?>
            </div>
	</div>
</body>
</html>
