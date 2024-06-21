<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Dev Zeros S.A.S"/>
    <meta name="description" content="Empresa de desarrollo software en valledupar. Enfocados en la evolución continua de las necesidades tecnológicas
      de nuestros clientes"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon.ico">
    <meta property="og:locale" content="es_ES"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="empresa de desarrollo software en Valledupar, Cesar, Colombia"/>
    <meta property="og:url" content="https://devzeros.com"/>
    <meta property="og:site_name" content="Desarrollo software"/>
    <meta property="og:description" content="Empresa de desarrollo software en valledupar. Enfocados en la evolución continua de las necesidades tecnológicas
      de nuestros clientes"/>
    <meta property="og:image" content="htttps://devzeros.com/img/Devzeros.png"/>
    <meta property="og:image:alt" content="DEvZeros enfocados en la evolución"/>


    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>DevZeros S.A.S</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/templatemo-softy-pinko.css">

    <link rel="stylesheet" href="css/styles.css">


</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ***** Whastapp Button ***** -->
<div class="float-btn">
    <a href="https://wa.me/573127834324" target="_blank">
        <img src="img/whatsapp.png" alt="WhatsApp">
    </a>
</div>

<!-- ***** Header Area Start ***** -->
<x-navbar/>

@include('layouts.hero')
@include('layouts.aboutSection')
@include('layouts.services')
@include('layouts.team')
@include('layouts.Projects')
@include('components.carousel')

<x-footer/>

<!-- jQuery -->
<script src="js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="js/scrollreveal.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="js/custom.js"></script>
<script src="js/main.js"></script>


</body>
</html>

