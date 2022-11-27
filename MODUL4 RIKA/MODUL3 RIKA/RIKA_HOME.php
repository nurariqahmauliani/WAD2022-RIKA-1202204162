<?php
    include('fungsi.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP_MODUL1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark p-3">
        <div class="container-fluid">
                <ul class="navbar-nav pl-3">
                    <li class="nav-item"><a class="nav-link text-light" href="RIKA_HOME.PHP">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="ADD_ITEM.php">MyCar</a></li>
                </ul>
                    <a href="....php" button type="button" class="btn btn-light text-primary">Add Car</a>
        </div>
        <div class="dropdown">
                <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Nama</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
        </div>
    </nav>
    <!-- <div class="dropdown">
                <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['nama']?></button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile-Naila.php">Profile</a></li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>   
            </div> -->
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col">
                <b><h1><p class="fw-bold">Selamat Datang Di Show Room Rika</p></h1></b>
                <p class="text-secondary" >At lacus vitae nulla sagittis scelerisque nist. Pellentesque duis curcus vestibulum, facilisi ac, sed faucibus.</p>
            <br>
            <div class="card-body">
                <a class="nav-link text-secondary"><a href="ADD_ITEM.php" class="btn btn-primary"> MyCar </a>
            </div>
            <div class="col">
                <br><br><img src="logo-ead.png"  style="width: 100px;px;height: 25px;px;"><a> Rika_1202204162</a>
            </div>
            </div> 
            <div class="col">
                <img src="car.webp" style="width:600px;height:380px;">
            </div>  
        </div>
    </div>
    </div>
    
</body>

</html>