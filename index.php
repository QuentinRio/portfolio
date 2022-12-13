<?php require_once 'form.php'; ?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Quentin Rio</title>
  <link rel="stylesheet" href="dist/css/style.css">
</head>

<body class="bg-primary container">
  <!-- Navigation -->
  <header class="vh-100 d-flex justify-content-sm-center bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-bordeau bg-gradient fixed-top py-3" id="mainNav">
      <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="#page-top">Portfolio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
          aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item"><a class="nav-link" href="#about">A Propos</a></li>
            <li class="nav-item"><a class="nav-link" href="#competences">Compétences</a></li>
            <li class="nav-item"><a class="nav-link" href="#mesProjets">Mes Projets</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    



    
    <!-- A Propos -->
    <section class="d-flex align-items-center page-section mt-n5 pt-5 text-white bg-gradient" id="about">
      <div class="text-center">
        <h1 class="text-center p-5">Développeur web Quentin Rio</h1>
        <p class="">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, laboriosam ipsa! Quisquam repellat earum,
          fugit
          perferendis quibusdam accusamus impedit, optio ab quam suscipit aperiam consectetur sapiente aut ipsam quo
          neque.</p>
        <p> Quo ducimus quaerat dignissimos esse obcaecati ipsum praesentium vitae quod labore nulla? Porro quaerat
          recusandae
          necessitatibus sapiente rerum eum libero cumque quis mollitia deleniti? Sit consequatur aut non officiis
          possimus!</p>
        <p>Asperiores, iure. Illum eos beatae cupiditate non. Itaque reprehenderit obcaecati rerum minima illum dolorem
          laudantium exercitationem? In reiciendis aut, doloremque a officiis qui itaque aliquid laudantium commodi
          alias
          necessitatibus maiores?
        </p>
      </div>
    </section>
  </header>

  <!-- Competences -->
  <section class="bg-gradient" id="competences">
    <h2 class="text-center text-white ">Mes Compétences</h2>
    <div class="py-1">
      <div class="container">
        <div class="row hidden-md-up">
          <div class="col-md-4 col-sm-6 centerQuery">
            <div class="card">
              <img src="img/php-logo.svg" class="card-img-top" alt="logo-php">
              <div class="card-block">
                <h4 class="card-title">PHP</h4>                
                <p class="card-text p-y-1">Framework Laravel</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 centerQuery">
            <div class="card">
              <img src="img/java-logo.svg" class="card-img-top" alt="logo-java">
              <div class="card-block">
                <h4 class="card-title">Java</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 centerQuery">
            <div class="card">
              <img src="img/mysql-logo.svg" class="card-img-top" alt="logo-mysql">
              <div class="card-block">
                <h4 class="card-title">MySQL</h4>
                <p class="card-text p-y-1">Création de base de donnée</p>
              </div>
            </div>
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-4 col-sm-6 centerQuery">
            <div class="card">
              <img src="img/html-log.svg" class="card-img-top" alt="logo-html">
              <div class="card-block">
                <h4 class="card-title">HTML</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 centerQuery">
            <div class="card">
              <img src="img/css-logo.svg" class="card-img-top" alt="logo-css">
              <div class="card-block">
                <h4 class="card-title">CSS</h4>
                <p class="card-text p-y-1">Framework Bootstrap</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 centerQuery">
            <div class="card">
              <img src="img/js-logo.svg" class="card-img-top" alt="logo-javaScript">
              <div class="card-block">
                <h4 class="card-title">JavaScript</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Mes Projets -->
  <section id="mesProjets">
    <h2 class="text-center text-white bg-gradient">Mes Projets</h2>
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active d-flex justify-content-center ">
          <img src="img/blog.png" class=" w-75" alt="...">
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <img src="img/blog.png" class=" w-75" alt="...">
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <img src="img/blog.png" class=" w-75" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


  <!-- Contact -->
  <section class="mb-4 bg-gradient">
    <h2 class="h1-responsive font-weight-bold text-center my-4 text-center text-white" id="contact">Contact</h2>
    <div class="row justify-content-sm-center">

      <div class="col-md-9 mb-md-0 mb-5 justify-content-sm-center">
        <form id="contact-form" name="contact-form" action="form.php" method="POST">

          <div class="row">
            <div class="col-md-6">
              <div class="md-form mb-0">
                <label for="name" class="text-white">Votre Nom</label>
                <input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="John Doe" class="form-control" required>
              </div>
            </div>

            <div class="col-md-6">
              <div class="md-form mb-0">
                <label for="email" class="text-white">Votre Email</label>
                <input type="text" id="email" name="email" value="<?php echo $email;?>" placeholder="exemple@exemple.fr" class="form-control" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <label for="subject" class="text-white">Sujet</label>
                <input type="text" id="sujet" name="sujet" value="<?php echo $sujet;?>" placeholder="Renseignement" class="form-control" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="md-form">
                <label for="message" class="text-white">Votre Message</label>
                <textarea type="text" id="message" name="message" rows="2" value="<?php echo $message;?>" placeholder="Saississez votre message" class="form-control md-textarea" required></textarea>
              </div>
            </div>
          </div>
          <div class="">
            <div class="d-grid gap-4 col-6 mx-auto mt-5 p-5 ">
              <button class="btn btn-bordeau btn-place" type="submit" name="submit">Envoi</button>
            </div>
          </div>
          
        </form>

        <footer class="h-25 d-flex justify-content-end">
          Copyright Quentin Rio
        </footer>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
          integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
          crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
          integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
          crossorigin="anonymous"></script> -->
</body>

</html>