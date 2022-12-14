<?php
session_start();
require 'Function-Almira.php';
if (!isset($_SESSION["login"])) {
    header("Location: Login-Almira.php");
    exit;
}else {
  if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
          $id=$_COOKIE["id"];
        }else {
         $id=$_SESSION["id"];
       }
 

  $result=mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
  $row =mysqli_fetch_assoc($result);
  $nama=$row["nama"];

}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
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
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="far fa-user"></i> &nbsp; <?= $nama; ?>
                </a>
                <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item text-primary" href="Profile-Almira.php"><i class="fas fa-user-edit"></i>&nbsp; Profile</a></li>
                    <li><a class="dropdown-item text-primary" href="Logout-Almira.php"><i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a></li>
                </ul>
            </li>
        </ul>
        </div>
    </nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


        <div class="container mt-5 pt-5">
            <div class="row d-flex flex-row"></div>

            <br>
            <br>
            <br>
            <br>
            <br>

            <div>
                <div class="single-item">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="lower-content">
                                        <div class="title-text"><h1>SELAMAT DATANG DI SHOWROOM ALMIRA</h1></div>
                                        <p>Showroom BMW terbaik di kota Bandung, terpercaya, dan aman.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 deals-block">
                            <div class="image-box">
                                <figure class="image"><img src="https://bmwstoreindonesia.files.wordpress.com/2021/09/bmw-tunas-bandung.png" width="600" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col text">
                <a class="btn btn-primary" href="Add-Almira.php">Add Car</a><br><br>
                <a class="mb-5 mt-5">
                    <img src="https://drive.google.com/uc?export=view&id=1hqBNDU1Tx1RKd8wzC1bmnhwBr-7YsK23" alt="logo" width="100">
                </a>
                <br>
                <p class="mt-3">Almira_1202200164</p>
            </div>
        </div>
    </body>