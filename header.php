<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

    <link rel = "stylesheet" href = "style.css" />

    <title>Mobile Shopping</title>

</head>
<body>
    <?php 
      ob_start();
      require('functions.php');
    ?>
    <!-- Header -->
    <header id = 'header'>
        <div class = "strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class = "font-raleway font-size-12 text-black m-0">Lorem ipsum 500-20 Eliwood Street, Washington 52123 @ (555)555-5555</p>
            <div class="font-raleway font-size-14">
                <a href="#" class="px-3 border-start border-end text-dark"> Login</a>
                <a href="#" class="px-3 border-end text-dark">Wishlist(0)</a>
            </div>
        </div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-secondary-bg">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Mobile Shopping</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">On Sale</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                  </li>
                </ul>
                <form action = "#" class = "font-size-14 font-raleway">
                    <a href = "cart.php" class = "py-2 rounded-pill color-primary-bg">
                        <span class = "font-size-16 px-2 text-white"><i class="fas fa-shopping-cart "></i></span>
                        <span class = "px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')) ?></span>
                    </a>
                </form>
              </div>
            </div>
          </nav>
    </header>
    
    <!-- Main -->
    <main id = "main-site">