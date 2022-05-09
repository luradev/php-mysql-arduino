<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Veículo</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel-1.css">
    <link rel="stylesheet" href="assets/css/Card-Carousel.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg bg-white portfolio-navbar gradient">
    <div class="container"><a class="navbar-brand logo" href="index.php"> <i class="fa fa-car"></i>  <strong>Accident-Tracker</strong><br /></a><button data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="veiculos.php">Veículo</a></li>
                <li class="nav-item"><a class="nav-link" href="condutores.php">Condutor</a></li>
                <li class="nav-item"><a class="nav-link" href="acidentes.php">Acidentes</a></li>
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="acidentes.php"><i class="fa fa-bell" id="noti_number"></i></a></li>
            </ul>
        </div>
    </div>
</nav>


<script type="text/javascript">
 function loadDoc() {
  
  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "dao/notification_data.php", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>