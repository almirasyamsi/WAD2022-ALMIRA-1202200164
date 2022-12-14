<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>EAD Rent Car</title>

</head>
<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-primary">
        <a 
            href="Home-Almira.php"
            class="navbar-brand mb-0 h1">
                <img
                class="d-inline-block align-top"
                src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23"
                width="150" height="50" />
        </a>
        <button 
        type="button"
        data-bs-toggle="collapse"
        data-bs-rarget="#navbarNav"
        class="navbar-toggler"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle Navigation"
        >
            <Span class="navbar-toggler-icon"></Span>
        </button>
        
        <div 
        class="collapse navbar-collapse" 
        id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="Home-Almira.php" class="nav-link active">
                    Home
                </a>
            </li>
            <li class="nav-item active">
                <a href="Add-Almira.php" class="nav-link">
                    MyCar
                </a>
            </li>
        </div>
        <div class="container-fluid">
                <a class="btn btn-primary" href="Add-Almira.php">Add Car</a>
            </div>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <div class="container mt-5 pt-5">
        <div class="row d-flex flex-row">
            <?php
                include "connector.php";
                $show = "SELECT * FROM showroom_almira_table";
                $query = mysqli_query($connect, $show);
                $row = mysqli_num_rows($query);

                if($row == 0){
                echo '<p style="font-size:30px;text-align:center" class="mt-5 pt-5">Tidak Ada Mobil !</p>';
                echo '<hr style="border:3px solid blue"></hr>';
                echo '<p style="text-align:center">Silahkan Menambahkan List Mobil</p>';
                }
                else{
                while($data = mysqli_fetch_array($query)){
            ?>

            <div class="card mx-1" style="width:18rem;">
                <img src="../asset/images/<?php echo $data['foto_mobil']?>" alt="foto_mobil" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama_mobil']?></h5>
                    <p class="card-text"><?= $data['deskripsi']?></p>
                    <a class="btn btn-primary" href="Detail-Almira.php?id_mobil=<?=$data['id_mobil']?>">Detail</a>
                </div>
            </div>
            <?php }?>
            <?php }?>
        </div>
    </div>
</body>