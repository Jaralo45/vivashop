<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("public/css/styles.css") ?>">
    <title>VivaShop</title>
</head>
<body>

<div class="container">

<div class="row justify-content-center">
<div class="col-lg-4 sm-12">
  <form class="form-container text-light p-5" action="<?= base_url("/login") ?>" method="POST">
  <div class="col login-sec">
    <h1 class="text-primary text-center">VivaShop</h1>
  </div>
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control input-login" name="username" id="floatingInput" required>
        <label for="login">Usuario</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control input-login" id="floatingPassword" name="clave" maxlength="30" minlength="8" required>
        <label for="clave">Contraseña</label>
    </div>
    <div class="row mt-3">
        <span class="text-dark">¿Eres nuevo? <a href="" class="text-primary text-decoration-none text-start">Registrate!</a></span>
    </div>
    <div class="d-grid gap-2 mt-3">
      <button type="submit" class="btn btn-primary btn-block text-white" id="calcular">Entrar</button>  
    </div>
  </form>
</div>
</div>

</div>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>