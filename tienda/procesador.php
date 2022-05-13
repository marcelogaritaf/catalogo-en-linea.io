<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
            alert("Debes iniciar sesión");
            </script>
        ';
        header("Location: ../login.php");
        session_destroy();
        die();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda | Procesador</title>
    <!-- link de iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/tienda.css">
    <!-- scrollreveal -->
    <script src="../libreriasJava/scrollreveal.js"></script>
    <!-- link de las letras -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="menu-display"> 
        <i class="fas fa-bars"></i>
    </div>
    <div class="container">
    <nav class="nav-main">
        <a href="../indexU.php"><img src="../assets/img/omenlogo.png" alt="logo de empresa" class="nav-brand"></a>
        <ul class="nav-menu">
            <li>
                <a href="computadoras.php">Computadoras</a>
            </li>
            <li>
                <a href="tarjetaMadre.php">Tarjetas | Procesadores</a>
                <ul class="menu-vertical">
                    <li><a href="tarjetaGrafica.php">Tarjeta Grafica</a></li>
                    <li><a href="tarjetaMadre.php">Tarjeta Madre</a></li>
                    <li><a href="procesador.php">Procesador</a></li>
                </ul>
            </li>
            <li>
                <a href="audifonos.php">Perifericos</a>
                <ul class="menu-vertical">
                    <li><a href="mouse.php">Mouse</a></li>
                    <li><a href="teclados.php">Teclados</a></li>
                    <li><a href="audifonos.php">Audifonos</a></li>
                </ul>
            </li>
            <li>
                <a href="mousepad.php">Accesorios</a>
                <ul class="menu-vertical">
                    <li><a href="mousepad.php">Mouse Pad</a></li>
                </ul>
            </li>
        </ul>
        <ul class="nav-menu-derecha">
            <li>
                <a href="../cerrarSesion.php">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
      </nav>
      <hr>
    </div> 
    <h2 class="titleP">Procesador</h2>
    <div class="ImagenesTienda">
        <figure>
            <img src="../assets/img/procesador/i5-10400F.jpg" alt="">
            <div class="capa">
                <h3>PROCESADOR I5-10400F</h3>
                <p>Intel Core i5-10400F Procesador de escritorio 6 núcleos de hasta 4,3 GHz sin gráficos de procesador LGA1200.</p>
            </div>
        </figure>
        <figure>   
            <img src="../assets/img/procesador/i9 10900.jpg" alt="">
            <div class="capa">
                <h3>PROCESADOR I9-10900</h3>
                <p>Procesador Intel Core i9-10900K para equipos de sobremesa de 10 núcleos de hasta 5,3 GHz LGA1200 125W.</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/procesador/Intel Pentium.jpg" alt="">
            <div class="capa">
                <h3>PROCESADOR INTEL PENTIUM</h3>
                <p>intel Pentium Gold G-6400 - Procesador de sobremesa (2 núcleos 4,0 GHz LGA1200 (chipset Intel serie 400)</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/procesador/IntelCeleron.jpg" alt="">
            <div class="capa">
                <h3>PROCESADOR INTEL CELERON G4900</h3>
                <p>Intel Cerleon G5920 - Procesador de sobremesa (2 núcleos de 3,6 GHz LGA1200 (chipset Intel serie 400) 58 W</p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/procesador/Ryzen5.jpg" alt="">
            <div class="capa">
                <h3>PROCESADOR RYZEN5 3600</h3>
                <p>AMD Ryzen 5 3600 Procesador de escritorio desbloqueado de 6 núcleos y 12 hilos con Wraith Stealth Cooler </p>
            </div>
        </figure> 
        <figure>   
            <img src="../assets/img/procesador/Ryzen7.jpg" alt="">
            <div class="capa">
                <h3>PROCESADOR RYZEN7 3800XT</h3>
                <p>Procesador para computadora de escritorio AMD Ryzen 7 3800X de 8 núcleos, 16 hilos de ejecución, desbloqueado.</p>
            </div>
        </figure> 
    </div>
    <!-- redes sociales -->
    <section class="social">
        <p>Redes Sociales</p>
        <div class="links">
            <a href="https://www.facebook.com/OMENP-105921798616101">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/MarceloGarita3">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/mgfra_s/">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
      </section>
  </div>

  <!-- footer -->
  <div class="footer-links">
    <div class="content-footer">
        <ul>
            <li>
                <a href="computadoras.php">
                    <h3>Computadoras</h3>
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="tarjetaMadre.php">
                    <h3>Tarjetas | Procesadores</h3>
                </a>
            </li>
            <li>
                <a href="tarjetaGrafica.php">Tarjeta Grafica</a>
            </li>
            <li>
                <a href="tarjetaMadre.php">Tarjeta Madre</a>
            </li>
            <li>
                <a href="procesador.php">Procesadores</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="audifonos.php">
                    <h3>Perifericos</h3>
                </a>
            </li>
            <li>
                <a href="mouse.php">Mouse</a>
            </li>
            <li>
                <a href="teclados.php">Teclados</a>
            </li>
            <li>
                <a href="audifonos.php">Audifonos</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="mousepad.php">
                    <h3>Accesorios</h3>
                </a>
            </li>
            <li>
                <a href="mousepad.php">Mousepad</a>
            </li>
        </ul>
    </div>
  </div>
  </div>
  <footer class="footer">
      <h3>Derechos Reservados</h3>
  </footer>
  <script src="../js/main.js"></script>
</body>
</html>