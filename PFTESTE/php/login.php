<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/loginn.css">
    <title>Login</title>
</head>
<body>

  <div class="container shadow w-75 bg-light" style="border-radius: 15px;">
    <div class="row align-items-stretch">
      <div class="col img d-none d-lg-block col-md-5 col-lg-5 col-xl-6" style="border-radius: 15px 0 0 15px;">
      </div>
      <div class="col">
        <div class="text-end mt-3">
          <img src="../img/logoBode.png" width="50" alt="">
        </div>
        <h2 class="fw-bold text-left login mb-5">Login</h2>
        <form action="loginphp.php" method="post">
          <div class="mb-4">
            <label for="email" class="input-label">Email Institucional:</label>
            <input id="email" type="email" class="form-control" name="email" pattern=".+@cefet-rj.br" placeholder="Ex: 12345678901@cefet-rj.br" required>
          </div>
          <div class="mb-4">
            <label for="senha" class="input-label">Senha:</label>
            <input id="senha" type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
          </div>
          <div class="d-grid">
            <input class="btn mb-3" type="submit" id="botao" value="Logar" required>
          </div>
          <div class="my-3">
            <span>Não possui uma conta? <a href="cadastroP.php">Cadastre-se</a>!</span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/77ba0c090e.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>
</html>
