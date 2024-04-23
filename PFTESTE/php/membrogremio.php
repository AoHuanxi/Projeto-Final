<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>ADM</title>
</head>
<header>
<?php
include("navbarGremio.php")
?>
</header>

<body>
<section>
    <div class=" container-fluid hero-header py-5 " style="background: #ffffff;">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 animated fadeIn hero-img">
            <img class="img-fluid animated pulse infinite rounded " style="animation-duration: 3s;"
              src="../img/header-inicio.png" alt="">
          </div>
          <div class="col-lg-6 ">
            <h1 class="h1 fs-2 mb-3 fw-bold animated slideInDown text-end">Bem-vindo ao nosso site!</h1>
            <p class="animated slideInDown fs-5 text-end">Nós somos o Grêmio Estudantil Matheus Soares, uma organização
              formada
              unicamente por estudantes, cuja função é tornar nossa escola mais
              democrática e acessível! Além disso, somos responsáveis por organizar eventos, festivais e promover
              debates sobre temas relevantes para o desenvolvimento estudantil e pessoal dos alunos.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section>
    <div class="content">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fec2fe" fill-opacity="1"
          d="M0,256L48,261.3C96,267,192,277,288,272C384,267,480,245,576,224C672,203,768,181,864,192C960,203,1056,245,1152,245.3C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
      <div class="container-fluid" style="background: #fec2fe;">
        <div class="container-xxl py-5">
          <div class="container apresent" id="apresent">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
              style="max-width: 500px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
              <h1 class="fs-2 fw-bold">Perfil Administrativo - Grêmio </h1>
              <p class="text-dark fs-4 mb-5">Confira tudo o que pode ser feito através da nossa plataforma:</p>
            </div>
            <div class="row g-5">
              <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="d-flex align-items-start card-body">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fa-regular fa-newspaper"></i> Fazer Postagem:</h5>
                      <p class="card-text">
                      </p>
                      <a href="publicar.php" class="btn btn-primary acessar">Acessar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="d-flex align-items-start card-body">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fa-solid fa-shirt"></i> Ver Reservas:</h5>
                      <p class="card-text">
                      </p>
                      <a href="reservas.php" class="btn btn-primary acessar">Acessar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="d-flex align-items-start card-body">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fa-solid fa-comments"></i> Ver Feedbacks:</h5>
                      <p class="card-text">
                      </p>
                      <a href="exibirfeedback.php" class="btn btn-primary acessar">Acessar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="d-flex align-items-start card-body">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fa-solid fa-user"></i> Ver Usuários:</h5>
                      <p class="card-text">
                      </p>
                      <a href="listagem.php" class="btn btn-primary acessar">Acessar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="d-flex align-items-start card-body">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fa-solid fa-ban"></i> Em breve:</h5>
                      <p class="card-text">
                      </p>
                      <a href="#" class="btn btn-primary acessar disabled" disabled>Acessar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="d-flex align-items-start card-body">
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title"><i class="fa-solid fa-ban"></i> Em breve:</h5>
                      <p class="card-text">
                      </p>
                      <a href="#" class="btn btn-primary acessar disabled" >Acessar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" class="svgg" viewBox="0 0 1440 320" style="background: #fec2fe;">
        <path fill="#f8f9fa" fill-opacity="1"
          d="M0,128L48,133.3C96,139,192,149,288,160C384,171,480,181,576,170.7C672,160,768,128,864,133.3C960,139,1056,181,1152,192C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
    </div>
  </section>
  <footer class="bg-light text-center text-lg-start border-top-5">
    <div class="container p-4 ">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text">Aplicação WEB Grêmio Estudantil Matheus Soares</h5>
          <p>
            Aplicação WEB destinada matéria de PROJETO FINAL, com <br>
            vistas à obtenção de nota para conclusão de curso.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text">Nossas Redes:</h5>
          <a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/gremiocefetni/?hl=pt-br"
            role="button"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/bellhooksni" role="button"><i
              class="fa-brands fa-twitter"></i></a>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright: Ao Huanxi, Beatriz de Oliveira Silva Moraes e Giovanna de Freitas Storti
    </div>
  </footer>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     -->
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <script src="https://kit.fontawesome.com/77ba0c090e.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>

</html>