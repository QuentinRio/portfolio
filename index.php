<?php require_once 'form.php'; 

?>


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
  <header id="page-top" class="vh-100 d-flex justify-content-sm-center bg-light">
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
    <section class="d-flex align-items-center page-section mt-n5 pt-5 text-white bg-gradient" id="about" tabindex="-1">
      <div class="text-center w-75 mx-auto">
        <article class="text-center fs-sm-6 fs-md-2">
          <h1 class="text-center p-5">Développeur web Quentin Rio</h1>
          <h2 hidden>Présentation</h2>
          <p>Après plusieurs années au sein de l'entreprise Micromania au poste de responsable de magasin, j'ai décidé
            d'effectuer une reconversion professionnelle dans le domaine du développement web.
          <p>
          <p>Attiré depuis peu par l'univers du développement, je me suis inscrit au centre de formation du Greta de
            Lyon afin d'apprendre les bases et les bonnes pratiques du développement web.</p>
          <p>Au sein de la formation, j'ai pu apprendre plusieurs langages en front-end (HTML, CSS, JavaScript) et
            back-end (Java, Php).</p>
        </article>
      </div>
    </section>
  </header>

  <main>
    <a class="skip-main" href="#about">Allez au contenu principal</a>
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
                  <h3 class="card-title text-center">PHP</h3>
                  <p class="card-text p-y-1 text-center">Framework Laravel</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 centerQuery">
              <div class="card">
                <img src="img/java-logo.svg" class="card-img-top" alt="logo-java">
                <div class="card-block">
                  <h3 class="card-title text-center">Java</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 centerQuery">
              <div class="card">
                <img src="img/mysql-logo.svg" class="card-img-top" alt="logo-mysql">
                <div class="card-block">
                  <h3 class="card-title text-center">MySQL</h3>
                  <p class="card-text p-y-1 text-center">Création de base de donnée</p>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-4 col-sm-6 centerQuery">
              <div class="card">
                <img src="img/html-log.svg" class="card-img-top" alt="logo-html">
                <div class="card-block ">
                  <h3 class="card-title text-center">HTML</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 centerQuery">
              <div class="card">
                <img src="img/css-logo.svg" class="card-img-top" alt="logo-css">
                <div class="card-block">
                  <h3 class="card-title text-center">CSS</h3>
                  <p class="card-text p-y-1 text-center">Framework Bootstrap</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 centerQuery">
              <div class="card">
                <img src="img/js-logo.svg" class="card-img-top" alt="logo-javaScript">
                <div class="card-block">
                  <h3 class="card-title text-center">JavaScript</h3>
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
            <a href="https://preconisations.atos-fluides.fr/">
              <img src="img/atos.png" class=" w-100" alt="atos-fluide">
            </a>
          </div>
          <div class="carousel-item d-flex justify-content-center">
            <a href="https://destock.phenixinfo.fr/">
              <img src="img/destockDiscount.png" class=" w-100" alt="destock-discount">
            </a>
          </div>
          <div class="carousel-item d-flex justify-content-center">
            <a href="https://quentin.gretacfalyon.com/blog/">
              <img src="img/blog1.png" class=" w-100" alt="blog">
            </a>
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
                  <label for="name" class="text-white">Votre Nom*</label>
                  <input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="John Doe"
                    class="form-control" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="md-form mb-0">
                  <label for="email" class="text-white">Votre Email*</label>
                  <input type="text" id="email" name="email" value="<?php echo $email; ?>"
                    placeholder="exemple@exemple.fr" class="form-control" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <label for="sujet" class="text-white">Sujet*</label>
                  <input type="text" id="sujet" name="sujet" value="<?php echo $sujet; ?>" placeholder="Renseignement"
                    class="form-control" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="md-form">
                  <label for="message" class="text-white">Votre Message*</label>
                  <textarea id="message" name="message" rows="2" placeholder="Saississez votre message"
                    class="form-control md-textarea" required></textarea>
                </div>
              </div>
            </div>

            <div>
              <input class="form-check-input" type="checkbox" id="cgu" required>
              <label class="form-check-label text-white" for="cgu">J'accepte les conditions générales et la politique de
                confidentialité</label>
            </div>

            <div>
              <div class="d-grid gap-4 col-6 mx-auto mt-5 p-5 ">
                <button class="btn btn-bordeau btn-place" type="submit" name="submit">Envoi</button>
              </div>
            </div>
          </form>


          <?php
          if (isset($_GET['success_message'])) {
            $success_message = $_GET['success_message'];
            ?>
          <div id="modal1" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="success-modal"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="success-modal">Succès !</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="alert alert-success">
                    <?php echo $success_message; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>

  </main>

  <footer class="h-25 d-flex justify-content-end text-white my-2 p-4">
    Copyright Quentin Rio
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>