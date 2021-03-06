<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Icon Bottstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="CSS/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Nanum+Gothic+Coding&family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&family=Press+Start+2P&display=swap" rel="stylesheet">

    <title>Projet_Git_PL</title>

    <style>
        body{
            font-family: 'Lato', sans-serif;
            
            
        }
        h1 {
            font-family: 'Nanum Gothic Coding', monospace;
            font-family: 'Press Start 2P', cursive;
        }
        .navname{
          font-family: 'Nanum Gothic Coding', monospace;
          font-family: 'Press Start 2P', cursive;
        }
        
    </style>
  </head>
  <body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid text-decoration-none">
    <img src="img/logo_small.png" alt="" width="40" height="40">
      <a class="navname navbar-brand text-center mx-auto text-danger text-danger">PIELO <i class="bi bi-github"></i></a>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-danger" type="submit">Chercher..</button>
        </form>
    </div>
  </nav>

  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="img/cac.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-white">Arizona</h5>
        <p class="fw-bold text-white">D??couvrer L'arizona</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="img/coc.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-white">Australie</h5>
        <p class="fw-bold text-white">D??couvrer L'Australie</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/cic.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="fw-bold fs-3 text-white">Islande</h5>
        <p class="fw-bold text-white">D??couvrer L'Islande</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <h1 class="text-center text-danger">Projet_Git</h1><br>


  <div class="containcard d-flex mx-auto justify-content-around">
    <div class="card" style="width: 18rem;">
      <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, excepturi!</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, quasi.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="https://picsum.photos/200/300?grayscale" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquam laborum animi nostrum rerum laudantium?</p>
      </div>
    </div>
  </div>



    <div class="container mx-auto text-center">
      <span class="btn btn-primary">Primary</span>
      <span class="btn btn-secondary">Secondary</span>
      <span class="btn btn-success">Success</span>
      <span class="btn btn-danger">Danger</span>
      <span class="btn btn-warning">Warning</span>
      <span class="btn btn-info">Info</span>
      <span class="btn btn-light">Light</span>
      <span class="btn btn-outline-dark">Dark</span>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    

  </body>
  <footer class="bg-dark text-center text-white">
  
  <div class="container p-4 pb-0">
    
    <section class="mb-4">
      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-facebook"></i></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-twitter"></i></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-instagram"></i></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-github"></i></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-linkedin"></i></a>

      
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="bi bi-bootstrap"></i></a>
    </section>
    
  </div>
  

  
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    ?? 2021 Copyright : Pierre-Lo??c
    
  </div>
  
</footer>
</html>